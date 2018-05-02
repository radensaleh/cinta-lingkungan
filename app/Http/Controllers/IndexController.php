<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\TypeTrash;
use App\ComplaintTrash;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show_index(){

      $countUsers     = User::count();
      $countTrash     = TypeTrash::count();
      $countComplaint = ComplaintTrash::count();

      return view('iflogin.index', compact('countUsers','countTrash','countComplaint'));

    }
}
