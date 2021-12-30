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
       return view('pages.register');
   }
   public function store(){
    return view('pages.store');
}

   public function addData(Request $req){
  
    $users= new users();
    $users->email = $req->email;
    $users->password = $req->password;     
    $users->save();
    

}

function addComment(Request $req){
  
   $Comment = new Comment;
   $Comment->name= $req->email;
    $Comment->email = $req->email;
    $Comment->Country = $req->Country;
    $Comment->Message = $req->Message;    
    $Comment->save();
    return Redirect::to('main');

}

 function addlogin(Request $req){

    $users= new users();
    $users->email = $req->email;
    $users->password = $req->password; 
    
    $result = DB::table('users')
    ->where('email',$req->input('email'))
    ->get();
    
    $res = json_decode($result,true);
    print_r($res);
    
    if(sizeof($res)==0){
    $req->session()->flash('error','Email Id does not exist. Please register yourself first');
    echo "Email Id Does not Exist.";
    return redirect('/pages/login');
    }
    else{
    echo "Hello";
    if($result[0]->password==$req->input('password')){
    echo "You are logged in Successfully";
    $req->session()->put('user',$result[0]->name);
    return redirect();
    }
    else{
    $req->session()->flash('error','Password Incorrect!!!');
    echo "Email Id Does not Exist.";
    return redirect('/pages/login');
    }
    }
    }

}
