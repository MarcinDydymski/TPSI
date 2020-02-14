@extends('template')

@section('content')

    <div style="margin-left: 100px">   
         
        <h1 style>{{$post->title}}</h1> 
         
    </div>
    <div style="margin-left: 100px">    <br/>   
        
        {!!Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST', 'class'=>'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Usuń post', ['class' => 'btn btn-link'])}}
        {!!Form::close()!!}
        
    </div>
    <br/>
    <div class="card" style="width: 30rem; margin-left: 100px">
        <div class="card-body">  
            <p class="card-text">{!!$post->body!!}</p><br/><br/>
            <small>Utworzony: {{$post->created_at}}</small>
        </div>
    </div>
<br/><br/>
    <a href="/posts" class="btn btn-default-primary" style="margin-left: 100px">
        <button type="button" class="btn btn-primary">Powrót</button>
    </a>
     
    
@endsection