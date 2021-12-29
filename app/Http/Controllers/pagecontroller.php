<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
       return view('pages.register');
   }
  
   function addData(Request $req){
  
    $users= new users();
    $users->email = $req->email;
    $users->Password = $req->Password;     
    $users->save();

    /*
    Session::flash('flash_message', 'Event added!');

    return redirect()->route('to any route you wish'); */

}

function addComment(Request $req){
  
   $Comment = new Comment;
   $Comment->name= $req->email;
    $Comment->email = $req->email;
    $Comment->Country = $req->Country;
    $Comment->Message = $req->Message;    
    $Comment->save();
    

}

}
