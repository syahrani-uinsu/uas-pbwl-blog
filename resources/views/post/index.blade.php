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
    <a class="nav-link active" href="{{ url('/post') }}">Post</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/category') }}">Category</a>
  </li>
</ul>
<h3 class="lead-strong">Daftar Post
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
  <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
  <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
</svg>
<a href="{{ url('/post/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
</h3> 
<table class="table table-bordered"> 
<thead class="thead-dark">
    <tr> 
    
    <th>Date</th>
    <th>Slug</th> 
    <th>Title</th> 
    <th>Text</th> 
    <th>Category</th> 
    <th>EDIT</th> 
    <th>DELETE</th> 
    </tr> 
@foreach($rows as $row) 
    <tr> 
    <td>{{ $row->post_date}}</td>
    <td>{{ $row->post_slug}}</td>
    <td>{{ $row->post_title}}</td> 
    <td>{{ $row->post_text}}</td> 
    <td>{{ $row->cat_id}}</td>  
    <td><a href="{{ url('post/' . $row->post_id . '/edit') }}" class="btn btn-primary btn-sm ">Edit</a</td> 
    <td>
        <form action="{{ url('/post/' . $row->post_id) }}" method="POST">
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