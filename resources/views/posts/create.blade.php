@extends('template')

@section('title')
    @if(isset($title))
        - {{$title}}
    @endif    
@endsection

@section('content')
<div class="container">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
            <li> {{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
<script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <h2>Dodawanie postu</h2>

        
    <form action="{{ action ('PostsController@store') }}" method="POST" role="form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
        <div class="form-group">
            <label for="title">Tytuł postu:</label>
            <input type="text" class="form-control" name="title" />
        </div>

        <div class="form-group">
            <label for="body">Treść postu</label>
            <textarea class="form-control" name="body" rows="10"></textarea>
            <script>
                CKEDITOR.replace('body');
            </script>
        </div>
        
        <input type="submit" value="Dodaj" class="btn btn-primary"/>
    </form>
</div>
@endsection('content')