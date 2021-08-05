<?php

        namespace App\Http\Controllers\Admin;
        
        use Illuminate\Http\Request;
        use App\Http\Controllers\Controller;
        use Illuminate\Support\Facades\Validator;
        use Illuminate\Support\Facades\Crypt;
        use App\Helper\Tamacrud;
        use App\Models\Admin\Produk;
        
        class ProdukController extends Controller
        {
            public function __construct()
            {
                $this->middleware('auth');
                //Set Permission By Role Here
            }
        
            public function index()
            {
                return view('admin.produk.index');
            }
        
            public function dt(Request $request)
            {
                $tbl = Produk::select('produk_id', 'produk_nama', 'produk_sku', 'produk_harga');
                if ($request->input('order.0.column') == 0) { 
                  $tbl = $tbl->orderBy('produk_id','desc');
                }   
                return Datatables($tbl)
                    ->addIndexColumn()
                    ->addColumn('action', function ($db) {
                        return '<a href="javascript:edit(\'' . Crypt::encryptString($db->produk_id) . '\')" title="Edit Data" class="btn btn-warning btn-sm waves-effect"><i class="mdi mdi-table-edit"></i></a> 
                                <a href="javascript:del(\'' . Crypt::encryptString($db->produk_id) . '\')" title="Delete Data" class="btn btn-sm waves-effect btn-danger"><i class="mdi mdi-delete"></i></a>';
                    })
                    ->editColumn('produk_id', function($db){
                        return Crypt::encryptString($db->produk_id);
                    })
                    ->rawColumns(['action'])->toJson();
            }
        
        
            public function insert(Request $request)
            {
                
                if ($request) {
                    $validator = $this->_rules($request);
                    if ($validator->fails()) {
                        return response()->json(['errors' => $validator->errors()]);
                    }
                    $dbs = new Produk();
                    return Tamacrud::savedb($dbs, $request->only(["produk_nama","produk_sku","produk_harga"]));
                } else return json_encode(array('status' => 'error;', 'text' => 'Failed Saving Data'));
            }
        
            public function update(Request $request)
            {
                try {
                    $validator = $this->_rules($request);
                    if ($validator->fails()) {
                        return response()->json(['errors' => $validator->errors()]);
                    }
                    $dbs = Produk::find(Crypt::decryptString($request->id));
                    return Tamacrud::savedb($dbs, $request->only(["produk_nama","produk_sku","produk_harga"]));
                } catch (\Illuminate\Database\QueryException $e) {
                    return json_encode(array('status' => 'error;', 'text' => 'Update data failed'));
                }
            }
        
            public function edit(Request $request)
            {
                return  Produk::find(Crypt::decryptString($request->id))->toJson();
            }
        
            public function delete(Request $request)
            {
                $ids = array();
                if(is_array($request->id)){
                    foreach($request->id as $item){
                        $ids[] = Crypt::decryptString($item);
                    }
                    $deleted = Produk::destroy($ids);
                }else{
                    $deleted = Produk::destroy(Crypt::decryptString($request->id));
                }
                if ($deleted)
                    return json_encode(array('status' => 'ok;', 'text' => ''));
                else
                    return json_encode(array('status' => 'error;', 'text' => 'Failed Deleting Data'));
            }
        
            public function _rules($request){
                $validator = Validator::make($request->all(), [
'produk_nama' => 'required',
'produk_sku' => 'required',
'produk_harga' => 'required',
], [], [
'produk_nama' => 'Produk Nama',
'produk_sku' => 'Produk Sku',
'produk_harga' => 'Produk Harga',
]);
        
                return $validator;
            }
        }
        