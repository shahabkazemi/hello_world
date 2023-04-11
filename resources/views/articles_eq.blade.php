@extends('layouts.master')
@section('title', 'Article Elequent')
@section('content')
    <h1>Article by Elequent</h1>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $item)
            <tr>
                <th scope="row">
                    <a href="{{route('article.edit', $item->id)}}" id="article_{{$item->id}}"><span>{{$item->id}} </span></a>
                </th>
                <td>{{$item->Title}}</td>
                <td>{{$item->Description}}</td>
                <td>
                    <form method="post" action="{{route('article.destroy',$item->id)}}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Del</button>
                    </form>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>

@endsection

