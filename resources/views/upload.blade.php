@extends('layouts.master')
@section('content')
    <form action="{{ route('login.upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="formFile1" class="form-label">Default file input example</label>
            <input name="formFile1" class="form-control" type="file" id="formFile1">
        </div>
        <div class="mb-3">
            <label for="formFile2" class="form-label">Default file input example</label>
            <input name="formFile2" class="form-control" type="file" id="formFile2">
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Send File</button>
    </form>
@endsection
