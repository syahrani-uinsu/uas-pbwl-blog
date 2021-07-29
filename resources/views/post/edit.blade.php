@extends('layouts.app') 

@section('content') 
<div class="container">
<h3>Edit Post</h3> 
    <form action="{{ url('/post/' . $row->post_id) }}" method="POST"> 
        <input name="_method" type="hidden" value="PATCH"> 

        @csrf 
        <table>
    
            <div class="form-group">
            <lable for="">Date</lable> 
            <input type="text" name="post_date" class="form-control" value="{{ $row->post_date }}">
            </div>

            <div class="form-group">
            <lable for="">Slug</lable> 
            <input type="text" name="post_slug" class="form-control" value="{{ $row->post_slug }}">
            </div>

            <div class="form-group">
            <lable for="">Title</lable> 
            <input type="text" name="post_title" class="form-control" value="{{ $row->post_title }}">
            </div>

            <div class="form-group">
            <lable for="">Text </lable> 
            <input type="text" name="post_text" class="form-control" value="{{ $row->post_text }}">
            </div>

            <div class="form-group">
            <lable for="">Category </lable> 
            <input type="text" name="cat_id" class="form-control" value="{{ $row->cat_id }}">
            </div>


            <div class="form-group">
            <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>
    </form> 
</div> 
@endsection