<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show_regisUser(){
        return view('register');
    }
    public function create_users(Request $request){
        User::create([
            'no_ktp'        => $request->no_ktp,
            'name_users'    => $request->name_users,
            'email'         => $request->email,
            'password'      => bcrypt($request->password),
            'address'        => $request->address
        ]);

        return view('register');
    }
    public function store(Request $request){

        $checkIfExists = User::where('no_ktp', $request->no_ktp)
                         ->get();

        if( count( $checkIfExists ) != 0 ){
         return response()->json([
           'error' => 1,
           'message' => 'No KTP Already Exist'
         ], 200);
        }

        $create = User::create( $request->all() );
        if( $create ) {
         return response()->json([
           'error' => 0,
           'message' => 'Anda Bisa Login di Mobile Anda'
         ], 200);
        }
    }
}
