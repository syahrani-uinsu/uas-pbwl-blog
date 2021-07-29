@extends('layouts.app')

@section('content')

<div class="container"> 
<ul class="nav left-content-center nav-pills">
  <li class="nav-item">
    <a class="nav-link " href="{{ url('/album') }}">Album</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{ url('/photos') }}">Photos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/post') }}">Post</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/category') }}">Category</a>
  </li>
</ul>
<h3 class="lead-strong">Daftar Photos
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
  <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
</svg>
<a href="{{ url('/photos/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
</h3> 
<table class="table table-bordered">
<thead class="thead-dark">
    <tr> 
    
    <th>Date</th>
    <th>Title</th> 
    <th>Text</th> 
    <th>Post</th> 
    <th>EDIT</th> 
    <th>DELETE</th> 
    </tr> 
@foreach($rows as $row) 
    <tr> 
    <td>{{ $row->photos_date}}</td>
    <td>{{ $row->photos_title}}</td> 
    <td>{{ $row->photos_text}}</td> 
    <td>{{ $row->post_id}}</td>  
    <td><a href="{{ url('photos/' . $row->photos_id . '/edit') }}" class="btn btn-primary btn-sm ">Edit</a</td> 
    <td>
        <form action="{{ url('/photos/' . $row->photos_id) }}" method="POST">
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