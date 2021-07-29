@extends('layouts.app') 

@section('content') 

<div class="container"> 

<h3>Tambah Post</h3> 
<form action="{{ url('/post') }}" method="POST">
 
@csrf 
<table>
    
    <div class="form-group">
    <lable for="">Date</lable> 
    <input type="text" name="post_date" class="form-control">
    </div>

    <div class="form-group">
    <lable for="">Slug</lable> 
    <input type="text" name="post_slug" class="form-control">
    </div>


    <div class="form-group">
    <lable for="">Title</lable> 
    <input type="text" name="post_title" class="form-control">
    </div>

    <div class="form-group">
    <lable for="">Text</lable> 
    <input type="text" name="post_text" class="form-control">
    </div>

    <div class="form-group">
    <lable for="">Category</lable> 
    <input type="text" name="cat_id" class="form-control">
    </div>

    <div class="form-group">
    <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
   
</table> 
</form> 
</div> 
@endsection