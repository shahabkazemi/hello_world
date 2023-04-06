@extends('layouts.master')
@section('content')
@foreach ($articles as $item)
<ul>
    <li>
        <span>{{$item->id}} - </span>
        <span style="font-weight:bold"> {{$item->Title}} : </span>
        <span>{{$item->Description}}</span>
    </li>
</ul>
@endforeach
<br>
<h1>One article by find method</h1>
<div>
    <span>{{$article->id}}</span>
    <span>{{$article->Title}}</span>
    <span>{{$article->Description}}</span>
</div>
<h1>
    Count method
    <div><span>{{$count}}</span></div>
</h1>


@endsection

