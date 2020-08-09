<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Http\Resources\Blog as BlogResource;

class BlogApiController extends Controller
{
    public function index()
    {
        $result = Blog::all();        
        return BlogResource::collection($result);
    }

    public function lisatar_blog(){
          $blogs=Blog::all();
          return $blogs;

    }

    public function edit($id)
    {
        $result= Blog::find($id);      
        return new BlogResource($result);
    }

    public function blog_user()
    {
        $result = Blog::all();        
        return BlogResource::collection($result);
        
    }


}
