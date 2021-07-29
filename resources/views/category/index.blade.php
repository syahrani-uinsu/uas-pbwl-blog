@extends('layouts.app')

@section('content')

<div class="container"> 
<ul class="nav left-content-center nav-pills">
  <li class="nav-item">
    <a class="nav-link " href="{{ url('/album') }}">Album</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{ url('/photos') }}">Photos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{ url('/post') }}">Post</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{ url('/category') }}">Category</a>
  </li>
</ul>
<h3 class="lead-strong">Daftar Category
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-tags-fill" viewBox="0 0 16 16">
  <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
  <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z"/>
</svg>
<a href="{{ url('/category/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
</h3> 
<table class="table table-bordered"> 
<thead class="thead-dark">
    <tr> 
    <th>NAMA</th>
    <th>TEXT</th> 
    <th>EDIT</th> 
    <th>DELETE</th> 
    </tr> 
@foreach($rows as $row) 
    <tr> 
    <td>{{ $row->cat_name}}</td>
    <td>{{ $row->cat_text}}</td> 
    <td><a href="{{ url('category/' . $row->cat_id . '/edit') }}" class="btn btn-primary btn-sm ">Edit</a</td> 
    <td>
        <form action="{{ url('/category/' . $row->cat_id) }}" method="POST">
        <input name="_method" type="hidden" value="DELETE">

        @csrf 
        <button class="btn btn-danger btn-sm">Delete</button> 
        </form>
    </td> 

    </tr> 
@endforeach 
</table> 
</div>

@endsection