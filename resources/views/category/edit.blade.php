@extends('layouts.app') 

@section('content') 
<div class="container">
<h3>Edit Category</h3> 
    <form action="{{ url('/category/' . $row->cat_id) }}" method="POST"> 
        <input name="_method" type="hidden" value="PATCH"> 

        @csrf 
        <table>
    
            <div class="form-group">
            <lable for="">Nama</lable> 
            <input type="text" name="cat_name" class="form-control" value="{{ $row->cat_name }}">
            </div>

            <div class="form-group">
            <lable for="">Text</lable> 
            <input type="text" name="cat_text" class="form-control" value="{{ $row->cat_text }}">
            </div>

            <div class="form-group">
            <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>
    </form> 
</div> 
@endsection