<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comment;


class CommentController extends Controller
{

  protected function create(array $data)
  {
      return Comment::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'Country' => $data['Country'],
        'Message' => $data['Message']
        ]);
  }

  function addComment(Request $req){
  
   $Comment = new Comment;
   $Comment->name= $req->email;
   $Comment->email = $req->email;
   $Comment->Country = $req->Country;
   $Comment->Message = $req->Message;    
   $Comment->save();
    //return Redirect::to('main');

}
}


