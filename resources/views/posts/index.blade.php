@extends('template')

@section('content')

    <div style="margin-left: 100px">    <h1>Posty</h1> <br/>   
        <a href="{{URL::to('posts/create')}}">Dodaj post</a>
    </div>
    @if(count($posts) >= 1)
        @foreach ($posts as $post)
            <br/>
            <div class="card" style="width: 80rem; margin-left: 100px">
                <div class="card-body">
                    <h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                    
                    <p class="card-text">

                        {!!substr($post->body,0,20)!!}
                        @if(strlen($post->body) > 20)
                            ...
                        @endif
                    </p>
                    
                <small>Utworzony: {{$post->created_at}}</small>
                </div>
            </div>
        @endforeach
        <div style="margin-left: 50%; margin-top: 100px">
            {{$posts->links()}} 
        </div>
    @else
            <p> Nie odnaleziono postów</p>
    @endif


@endsection