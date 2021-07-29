@extends('layouts.app')

@section('content')

<div class="container"> 
<ul class="nav left-content-center nav-pills">
  <li class="nav-item">
    <a class="nav-link active " href="{{ url('/album') }}">Album</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{ url('/photos') }}">Photos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/post') }}">Post</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/category') }}">Category</a>
  </li>
</ul>

<h3 class="lead-strong">Daftar Album
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-journal-album" viewBox="0 0 16 16">
  <path d="M5.5 4a.5.5 0 0 0-.5.5v5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5h-5zm1 7a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3z"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg>
<a href="{{ url('/album/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
</h3> 
<table class="table table-bordered"> 
<thead class="thead-dark"> 
<tr> 
    
    <th>NAMA</th>
    <th>TEXT</th> 
    <th>PHOTOS</th> 
    <th>EDIT</th> 
    <th>DELETE</th> 
    </tr> 
@foreach($rows as $row) 
    <tr> 
    <td>{{ $row->album_name}}</td>
    <td>{{ $row->album_text}}</td> 
    <td>{{ $row->photos_id}}</td>  
    <td><a href="{{ url('album/' . $row->album_id . '/edit') }}" class="btn btn-primary btn-sm ">Edit</a</td> 
    <td>
        <form action="{{ url('/album/' . $row->album_id) }}" method="POST">
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