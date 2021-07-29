@extends('layouts.app') 

@section('content') 

<div class="container"> 

<h3>Tambah Category</h3> 
<form action="{{ url('/category') }}" method="POST">
 
@csrf 
<table>
    
    <div class="form-group">
    <lable for="">Nama</lable> 
    <input type="text" name="cat_name" class="form-control">
    </div>

    <div class="form-group">
    <lable for="">Text</lable> 
    <input type="text" name="cat_text" class="form-control">
    </div>

    <div class="form-group">
    <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
   
</table> 
</form> 
</div> 
@endsection