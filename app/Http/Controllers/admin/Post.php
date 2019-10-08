<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\post as postModel;
use App\category as categoryModel;
class Post extends Controller
{
    //
    function showPost(){
      $post = postModel::paginate(10);
      return View("admin/post",['post'=>$post]);
    }

    function newPost(){
      $category = categoryModel::all();
      return View("admin/newPost",['category'=>$category]);
    }

    function savePost(Request $request){
      $post = new postModel;

      $post->post_title = $request->input('title');
      $post->post_category = $request->input('category');
      $post->post_content = $request->input('content');
      $post->save();
      redirect('myadmin/post');
    }
}
