<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}