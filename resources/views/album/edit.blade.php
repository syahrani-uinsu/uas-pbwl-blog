@extends('layouts.app') 

@section('content') 
<div class="container">
<h3>Edit Album</h3> 
    <form action="{{ url('/album/' . $row->album_id) }}" method="POST"> 
        <input name="_method" type="hidden" value="PATCH"> 

        @csrf 
        <table>
    
            <div class="form-group">
            <lable for="">Nama</lable> 
            <input type="text" name="album_name" class="form-control" value="{{ $row->album_name }}">
            </div>

            <div class="form-group">
            <lable for="">Text</lable> 
            <input type="text" name="album_text" class="form-control" value="{{ $row->album_text }}">
            </div>

            <div class="form-group">
            <lable for="">Photos </lable> 
            <input type="text" name="photos_id" class="form-control" value="{{ $row->photos_id }}">
            </div>

            <div class="form-group">
            <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>
    </form> 
</div> 
@endsection