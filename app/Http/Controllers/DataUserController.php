<?php

namespace App\Http\Controllers;

use DB;
use App\ComplaintTrash;
use App\User;
use Illuminate\Http\Request;

class DataUserController extends Controller
{
    public function show_page(){

        $users = DB::table('users')->get();
        $countTrash = ComplaintTrash::count();

        return view('iflogin.datausers' ,
            ['users' => $users],
            ['countTrash' => $countTrash]
        );
    }
    public function store(Request $request){
        $checkIfExists = User::where('no_ktp', $request->no_ktp)
                         ->get();
        if( count($checkIfExists) != 0){
          return response()->json([
            'error' => 1,
            'message' => 'NIK Already Exist'
          ], 200);
        }

        $create = User::create( $request->all() );
        if( $create ){
          return response()->json([
            'error' => 0,
            'message' => 'Success Add Data'
          ], 200);
        }
    }
    public function update(Request $request){
        $datauser = User::findOrFail($request->no_ktp);
        $datauser->update($request->all());

        if( $datauser ){
          return response()->json([
            'error' => 0,
            'message' => 'Success Edit Data'
          ], 200);
        }
    }
    public function destroy(Request $request){
         $datauser = User::findOrFail($request->no_ktp);
         $datauser->delete();

         if( $datauser ){
           return response()->json([
             'error' => 0,
             'message' => 'Success Delete Data'
           ], 200);
         }
    }

}
