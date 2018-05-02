<?php

namespace App\Http\Controllers;

use DB;
use App\ComplaintTrash;
use App\TypeTrash;
use Illuminate\Http\Request;

class TypeTrashController extends Controller
{
    public function show_page(){

        $trash = TypeTrash::all();
        $countTrash = ComplaintTrash::count();

        return view('iflogin.typetrash' ,
            ['trash' => $trash],
            ['countTrash' => $countTrash]
        );
    }
    public function create_data(Request $request){
        TypeTrash::create([
            'id_trash' => $request->id_trash,
            'type'     => $request->type
        ]);

        return view('iflogin.typetrash');
    }
    public function store(Request $request){
      $checkIfExists = TypeTrash::where('id_trash', $request->id_trash)
                       ->get();

      if( count( $checkIfExists ) != 0 ){
       return response()->json([
         'error' => 1,
         'message' => 'Id Already Exist'
       ], 200);
      }

      $create = TypeTrash::create( $request->all() );
      if( $create ) {
       return response()->json([
         'error' => 0,
         'message' => 'Success Add Data'
       ], 200);
      }

    }
    public function update(Request $request){
        $datatrash = TypeTrash::findOrFail($request->id_trash);
        $datatrash->update($request->all());

        if( $datatrash ){
          return response()->json([
            'error' => 0,
            'message' => 'Success Edit Data'
          ], 200);
        }
    }
    public function destroy(Request $request){
         $datatrash = TypeTrash::findOrFail($request->id_trash);
         $datatrash->delete();

         if( $datatrash ){
           return response()->json([
             'error' => 0,
             'message' => 'Success Delete Data'
           ], 200);
         }
    }

}
