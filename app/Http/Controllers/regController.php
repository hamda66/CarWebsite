<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\users;


class regController extends Controller
{

   function addData(Request $req){ 
    $users= new Users;
    $users->email = $req->email;
    $users->Password = $req->password;     
    $users->save(); 
}

}
