@extends('layouts.app') 

@section('content') 
<div class="container">
<h3>Edit Photos</h3> 
    <form action="{{ url('/photos/' . $row->photos_id) }}" method="POST"> 
        <input name="_method" type="hidden" value="PATCH"> 

        @csrf 
        <table>
    
            <div class="form-group">
            <lable for="">Date</lable> 
            <input type="text" name="photos_date" class="form-control" value="{{ $row->photos_date }}">
            </div>

            <div class="form-group">
            <lable for="">Title</lable> 
            <input type="text" name="photos_title" class="form-control" value="{{ $row->photos_title }}">
            </div>

            <div class="form-group">
            <lable for="">Text </lable> 
            <input type="text" name="photos_text" class="form-control" value="{{ $row->photos_text }}">
            </div>

            <div class="form-group">
            <lable for="">Post </lable> 
            <input type="text" name="post_id" class="form-control" value="{{ $row->post_id }}">
            </div>


            <div class="form-group">
            <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>
    </form> 
</div> 
@endsection