<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\post as postModel;

class Post extends Controller
{
    //
    function showPost(){
      $post = postModel::paginate(15);
      return View("admin/post",['post'=>$post]);
    }
}
