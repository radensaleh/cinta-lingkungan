<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\TypeTrash;
use App\ComplaintTrash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ComplaintController extends Controller
{
    public function show_page(){

        $countTrash    = ComplaintTrash::count();
        $dataComplaint = ComplaintTrash::all();
        $dataUser      = User::all();
        $dataTrash     = TypeTrash::all();

        // return view('iflogin.datacomplaint' ,
        //     ['dataComplaint' => $dataComplaint],
        //     ['countTrash' => $countTrash]
        // );
        return view('iflogin.datacomplaint', compact('countTrash','dataComplaint','dataUser','dataTrash'));
    }
    public function store(Request $request){
        $checkIfExists = ComplaintTrash::where('id_complaint', $request->id_complaint)->get();

        if( count($checkIfExists) != 0){
            return response()->json([
                'error' => 1,
                'message' => 'Id Complaint Already Exist'
            ], 200);
        }

        $request->file('photo');
        // $image = ComplaintTrash::create( $request->all() );
        // if(Input::hasFile('photo')){
        //     $file = Input::file('photo');
        //     $file->move(public_path().'/', $file->getClientOriginalName());
        //     $image->name = $file->getClientOriginalName();
        // }
        // $image->save();

        return $request->image->store('public');
    }
    public function destroy(Request $request){
        $dataComplaint = ComplaintTrash::findOrFail($request->id_complaint);
        $dataComplaint->delete();

        if( $dataComplaint ){
          return response()->json([
            'error' => 0,
            'message' => 'Success Delete Data'
          ], 200);
        }
    }
}
