<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Middleware;
use Illuminate\Support\Facades\Route;

use App\Models\users;

class pagecontroller extends Controller
{
   
    public function about(){
       return view('pages.about');
   }
   public function contact(){
       return view('pages.contact');
   }
   public function brands(){
       return view('pages.brands');
   }
   public function login(){
       return view('pages.login');
   }
    public function registerpage(){
       return view('Auth.register');
    }
   public function store(){
    return view('pages.store');
   }


    


public function addData(Request $req){
  
    $users= new User();
    $users->email = $req->email;
    $users->password = $req->password;     
    $users->save();
}
/*
function addComment(Request $req){
  
   $Comment = new Comment;
   $Comment->name= $req->email;
    $Comment->email = $req->email;
    $Comment->Country = $req->Country;
    $Comment->Message = $req->Message;    
    $Comment->save();
    return Redirect::to('main');

}
*/

 
} 