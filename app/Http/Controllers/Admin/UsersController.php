<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use App\Helper\Tamacrud;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //Set Permission By Role Here
    }

    public function index()
    {
        return view('admin.users.index');
    }

    public function dt(Request $request)
    {
        $data = User::with('roles');
       
        return Datatables($data)
            ->addIndexColumn()
            ->editColumn('roles', function($db){
               $roles = "";
               foreach($db->roles as $role){
                   $roles .= "<a class='badge badge-primary text-white p-2'>".$role->name."</a>";
               }
              return $roles;
            })
            ->addColumn('action', function ($db) {
                return '<a href="javascript:edit(\'' . Crypt::encryptString($db->id) . '\')" title="Edit Data" class="btn btn-warning btn-sm waves-effect"><i class="mdi mdi-table-edit"></i></a> 
                                <a href="javascript:del(\'' . Crypt::encryptString($db->id) . '\')" title="Delete Data" class="btn btn-sm waves-effect btn-danger"><i class="mdi mdi-delete"></i></a>';
            })
            ->editColumn('id', function ($db) {
                return Crypt::encryptString($db->id);
            })
            ->rawColumns(['action', 'roles'])->toJson();
    }


    public function insert(Request $request)
    {

        if ($request) {
            $validator = $this->_rules($request);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()]);
            }
            $dbs = new User();
            return Tamacrud::savedb($dbs, $request->only(["name", "email", "password"]));
        } else return json_encode(array('status' => 'error;', 'text' => 'Failed Saving Data'));
    }

    public function update(Request $request)
    {
        try {
            $validator = $this->_rules($request);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()]);
            }
            $dbs = User::find(Crypt::decryptString($request->id));
            return Tamacrud::savedb($dbs, $request->only(["name", "email", "password"]));
        } catch (\Illuminate\Database\QueryException $e) {
            return json_encode(array('status' => 'error;', 'text' => 'Update data failed'));
        }
    }

    public function edit(Request $request)
    {
        return  User::find(Crypt::decryptString($request->id))->toJson();
    }

    public function delete(Request $request)
    {
        $ids = array();
        if (is_array($request->id)) {
            foreach ($request->id as $item) {
                $ids[] = Crypt::decryptString($item);
            }
            $deleted = User::destroy($ids);
        } else {
            $deleted = User::destroy(Crypt::decryptString($request->id));
        }
        if ($deleted)
            return json_encode(array('status' => 'ok;', 'text' => ''));
        else
            return json_encode(array('status' => 'error;', 'text' => 'Failed Deleting Data'));
    }

    public function _rules($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ], [], [
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
        ]);

        return $validator;
    }
}
