<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use App\Helper\Tamacrud;
use App\Models\Admin\Merchants;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MerchantsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //Set Permission By Role Here
    }

    public function index()
    {
        return view('admin.merchants.index');
    }

    public function dt(Request $request)
    {
        $tbl = Merchants::select('id', 'user_id', 'nama', 'alamat', 'logo', 'banner', 'active')->where('user_id', Auth::user()->id);
        if ($request->input('order.0.column') == 0) {
            $tbl = $tbl->orderBy('id', 'desc');
        }
        return Datatables($tbl)
            ->addIndexColumn()
            ->addColumn('action', function ($db) {
                $btnaction = '';
                if (!$db->active) {
                    $btnaction .= '<a href="javascript:activate(\'' . Crypt::encryptString($db->id) . '\')" title="Activate Manage Merchant" class="btn btn-success btn-sm waves-effect"><i class="mdi mdi-check"></i></a> ';
                }
                $btnaction .= '<a href="javascript:edit(\'' . Crypt::encryptString($db->id) . '\')" title="Edit Data" class="btn btn-warning btn-sm waves-effect"><i class="mdi mdi-table-edit"></i></a> 
                                <a href="javascript:del(\'' . Crypt::encryptString($db->id) . '\')" title="Delete Data" class="btn btn-sm waves-effect btn-danger"><i class="mdi mdi-delete"></i></a>';
                return $btnaction;
            })
            ->editColumn('id', function ($db) {
                return Crypt::encryptString($db->id);
            })->editColumn('logo', function ($db){
                $url = Storage::url($db->logo);
                $path = asset($url);
                return "<img src='$path' width='70' />";
            })->editColumn('banner', function ($db){
                $url = Storage::url($db->banner);
                $path = asset($url);
                return "<img src='$path' width='150' />";
            })
            ->editColumn('active', function ($db) {
                if ($db->active) {
                    return "<a class='btn btn-sm btn-success text-white'>Active</a>";
                } else {
                    return "-";
                }
            })
            ->rawColumns(['logo', 'banner', 'active', 'action'])->toJson();
    }


    public function insert(Request $request)
    {

        if ($request) {
            $validator = $this->_rules($request);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()]);
            }
            $dbs = new Merchants();
            $pathlogo = $request->file('logo')->store('public/merchants');
            $pathbanner = $request->file('banner')->store('public/merchants');
            $request->merge([
                'user_id' => Auth::user()->id,
            ]);
            $dbs->logo = $pathlogo;
            $dbs->banner = $pathbanner;
            return Tamacrud::savedb($dbs, $request->only(["user_id", "nama", "alamat"]));
        } else return json_encode(array('status' => 'error;', 'text' => 'Failed Saving Data'));
    }

    public function update(Request $request)
    {
        try {
            $validator = $this->_rules($request);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()]);
            }
            $dbs = Merchants::find(Crypt::decryptString($request->id));
            return Tamacrud::savedb($dbs, $request->only(["user_id", "nama", "alamat", "logo", "banner"]));
        } catch (\Illuminate\Database\QueryException $e) {
            return json_encode(array('status' => 'error;', 'text' => 'Update data failed'));
        }
    }

    public function edit(Request $request)
    {
        return  Merchants::find(Crypt::decryptString($request->id))->toJson();
    }

    public function delete(Request $request)
    {
        $ids = array();
        if (is_array($request->id)) {
            foreach ($request->id as $item) {
                $ids[] = Crypt::decryptString($item);
            }
            $deleted = Merchants::destroy($ids);
        } else {
            $deleted = Merchants::destroy(Crypt::decryptString($request->id));
        }
        if ($deleted)
            return json_encode(array('status' => 'ok;', 'text' => ''));
        else
            return json_encode(array('status' => 'error;', 'text' => 'Failed Deleting Data'));
    }

    public function activate(Request $request)
    {
        $activatedmerchant = Merchants::where('user_id', Auth::user()->id)->update(['active' => 0]);
        

        $merchant = Merchants::find(Crypt::decryptString($request->id));
        $merchant->active = true;
        if ($merchant->save())
            return json_encode(array('status' => 'ok;', 'text' => ''));
        else
            return json_encode(array('status' => 'error;', 'text' => 'Gagal Activasi Merchant'));
    }

    public function _rules($request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'alamat' => 'required',
            'logo' => 'required',
            'banner' => 'required',
        ], [], [
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'logo' => 'Logo',
            'banner' => 'Banner',
        ]);

        return $validator;
    }
}
