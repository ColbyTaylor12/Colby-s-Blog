@extends('layout')

@section('title', 'Blog Home')

@section('content')
<div class="btn-group btn-group-justified pb-5">
  <a href="/blog-create" class="btn btn-primary" role="button">New Post</a>
  <a href="/blog-edit" class="btn btn-primary" role="button">Edit Post</a>
  <a href="/blog-index" class="btn btn-primary" role="button">Blog Index</a>
</div>
<home-component></home-component>
@endsection