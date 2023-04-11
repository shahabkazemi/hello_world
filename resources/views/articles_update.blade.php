@extends('layouts.master')
@section('title', 'Update Article')
@section('content')
    <h1>Update Articles</h1>
    <form action="{{route('article.update', $id)}}" method="POST">
        <input type="hidden" name="_method" value="PUT">
    @csrf
    <div class="form-group">
        <label for="articleTitle">Title</label>
        <input type="text" name="Title" class="form-control" id="articleTitle" aria-describedby="titleHelp" placeholder="Enter title" @isset($article) value="{{$article->Title}}" @endisset>
        <small id="titleHelp" class="form-text text-muted">Please insert your desired title.</small>
    </div>
    <div class="form-group">
        <label for="articleDescription">Description</label>
        <input type="text" name="Description" class="form-control" id="articleDescription" placeholder="Description" @isset($article) value="{{$article->Description}}" @endisset>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Update</button>
    </form>
    
@endsection
