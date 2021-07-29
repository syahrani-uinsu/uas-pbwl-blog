@extends('layouts.app') 

@section('content') 

<div class="container"> 

<h3>Tambah Photos</h3> 
<form action="{{ url('/photos') }}" method="POST">
 
@csrf 
<table>
    
    <div class="form-group">
    <lable for="">Date</lable> 
    <input type="text" name="photos_date" class="form-control">
    </div>

    <div class="form-group">
    <lable for="">Title</lable> 
    <input type="text" name="photos_title" class="form-control">
    </div>

    <div class="form-group">
    <lable for="">Text</lable> 
    <input type="text" name="photos_text" class="form-control">
    </div>

    <div class="form-group">
    <lable for="">Post</lable> 
    <input type="text" name="post_id" class="form-control">
    </div>

    <div class="form-group">
    <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
   
</table> 
</form> 
</div> 
@endsection