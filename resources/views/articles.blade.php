@extends('layouts.master')
@section('content')

{{-- @foreach ($articles as $item)
<ul>
    <li>
        <a href="{{route('article.edit', $item->id)}}" id="article_{{$item->id}}"><span>{{$item->id}} </span></a>
        <span>-</span>

        <span style="font-weight:bold"> {{$item->Title}} : </span>
        <span>{{$item->Description}}</span>
    </li>
</ul>
@endforeach --}}


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

<h1>Update articles</h1>
<form action="{{route('article.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="articleTitle">Title</label>
      <input type="text" name="Title" class="form-control" id="articleTitle" aria-describedby="titleHelp" placeholder="Enter title" >
      <small id="titleHelp" class="form-text text-muted">Please insert your desired title.</small>
    </div>
    <div class="form-group">
      <label for="articleDescription">Description</label>
      <input type="text" name="Description" class="form-control" id="articleDescription" placeholder="Description" >
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Insert</button>
  </form>
  <br>

  @isset($goto)
    <h1>{{$goto}}</h1>
    <script>
        var fire = false;
        function scroll_down(){
            //window.scrollBy(0, -100);
            document.getElementById("article_"+{{$goto}}).scrollIntoView({
            behavior: 'auto',
            block: 'center',
            inline: 'center'
        });
        }
        document.addEventListener("scroll", (event) => {
            if (fire) {
                console.log('Dialog text here.');
                fire = false;
                setTimeout(scroll_down, 100);
            }

    });

        window.location.href = "#article_"+{{$goto}};
        fire = true;


    </script>
  @endisset

@endsection

