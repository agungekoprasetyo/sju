<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use App\Helper\Tamacrud;
use App\Models\Admin\Categories;
use App\Models\Admin\Menus;
use App\Models\Admin\Merchants;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MenusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //Set Permission By Role Here
    }

    public function index()
    {   
    
        try {
            $merchant = Merchants::where('user_id', Auth::user()->id)->where('active', 1)->first()->id;
            $category = Categories::where('merchant_id', $merchant)->get();
            return view('admin.menus.index', compact('category'));
        } catch (\Throwable $th) {
            return view('admin.nomerchant');
        }
        
    }

    public function dt(Request $request)
    {
        $tbl = Menus::select('menus.id', 'category_id', 'menus.nama', 'deskripsi', 'harga', 'image')->with('category')->join('merchants', 'merchants.id', 'merchant_id')->where('merchants.active', 1);
        if ($request->input('order.0.column') == 0) {
            $tbl = $tbl->orderBy('id', 'desc');
        }
        return Datatables($tbl)
            ->addIndexColumn()
            ->addColumn('action', function ($db) {
                return '<a href="javascript:edit(\'' . Crypt::encryptString($db->id) . '\')" title="Edit Data" class="btn btn-warning btn-sm waves-effect"><i class="mdi mdi-table-edit"></i></a> 
                                <a href="javascript:del(\'' . Crypt::encryptString($db->id) . '\')" title="Delete Data" class="btn btn-sm waves-effect btn-danger"><i class="mdi mdi-delete"></i></a>';
            })
            ->editColumn('id', function ($db) {
                return Crypt::encryptString($db->id);
            })->editColumn('image', function ($db){
                $url = Storage::url($db->image);
                $path = asset($url);
                return "<img src='$path' width='100' />";
            })
            ->rawColumns(['image', 'action'])->toJson();
    }


    public function insert(Request $request)
    {

        if ($request) {
            $merchant = Merchants::where('user_id', Auth::user()->id)->where('active', 1)->first()->id;

            $validator = $this->_rules($request);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()]);
            }
            $dbs = new Menus();
            $request->merge([
                'merchant_id' => $merchant,
            ]);
            $path = $request->file('image')->store('public/menus');
            $dbs->image = $path;
            return Tamacrud::savedb($dbs, $request->only(["merchant_id", "category_id", "nama", "deskripsi", "harga"]));
        } else return json_encode(array('status' => 'error;', 'text' => 'Failed Saving Data'));
    }

    public function update(Request $request)
    {
        try {
            $validator = $this->_rules($request);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()]);
            }
            $dbs = Menus::find(Crypt::decryptString($request->id));
            return Tamacrud::savedb($dbs, $request->only(["category_id", "nama", "deskripsi", "harga", "image"]));
        } catch (\Illuminate\Database\QueryException $e) {
            return json_encode(array('status' => 'error;', 'text' => 'Update data failed'));
        }
    }

    public function edit(Request $request)
    {
        return  Menus::find(Crypt::decryptString($request->id))->toJson();
    }

    public function delete(Request $request)
    {
        $ids = array();
        if (is_array($request->id)) {
            foreach ($request->id as $item) {
                $ids[] = Crypt::decryptString($item);
            }
            $deleted = Menus::destroy($ids);
        } else {
            $deleted = Menus::destroy(Crypt::decryptString($request->id));
        }
        if ($deleted)
            return json_encode(array('status' => 'ok;', 'text' => ''));
        else
            return json_encode(array('status' => 'error;', 'text' => 'Failed Deleting Data'));
    }

    public function _rules($request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'image' => 'required',
        ], [], [
            'category_id' => 'Category Id',
            'nama' => 'Nama',
            'deskripsi' => 'Deskripsi',
            'harga' => 'Harga',
            'image' => 'Image',
        ]);

        return $validator;
    }
}
