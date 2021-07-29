@extends('layouts.app') 

@section('content') 

<div class="container"> 

<h3>Tambah Album</h3> 
<form action="{{ url('/album') }}" method="POST">
 
@csrf 
<table>
    
    <div class="form-group">
    <lable for="">Nama</lable> 
    <input type="text" name="album_name" class="form-control">
    </div>

    <div class="form-group">
    <lable for="">Text</lable> 
    <input type="text" name="album_text" class="form-control">
    </div>

    <div class="form-group">
    <lable for="">Photos Name</lable> 
    <input type="text" name="photos_id" class="form-control">
    </div>

    <div class="form-group">
    <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
   
</table> 
</form> 
</div> 
@endsection