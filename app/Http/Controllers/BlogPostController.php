<?php

namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function store(Request $request)
    {
      $blogpost = new BlogPost([
        'title' => $request->get('title'),
        'body' => $request->get('body')
      ]);

      $blogpost->save();

      return response()->json('successfully added');
    }

    public function index()
    {
      return new BlogPostCollection(BlogPost::all());
    }

    public function edit($id)
    {
      $blogpost = BlogPost::find($id);
      return response()->json($blogpost);
    }

    public function update($id, Request $request)
    {
      $blogpost = BlogPost::find($id);

      $blogpost->update($request->all());

      return response()->json('successfully updated');
    }

    public function delete($id)
    {
      $blogpost = BlogPost::find($id);

      $blogpost->delete();

      return response()->json('successfully deleted');
    }
}
