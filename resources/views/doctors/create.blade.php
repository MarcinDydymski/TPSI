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

    <h2>Dodawanie lekarza</h2>
    <form action="{{ action ('DoctorController@store') }}" method="POST" role="form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
        <div class="form-group">
            <label for="name">Nazwisko i imię:</label>
            <input type="text" class="form-control" name="name" />
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="text" class="form-control" name="email" />
        </div>

        <div class="form-group">
            <label for="password">Hasło:</label>
            <input type="password" class="form-control" name="password" />
        </div>

        <div class="form-group">
            <label for="phone">Telefon:</label>
            <input type="phone" class="form-control" name="phone" />
        </div>

        <div class="form-group">
            <label for="address">Adres:</label>
            <input type="address" class="form-control" name="address" />
        </div>

        <div class="form-group">
            <label for="pesel">PESEL:</label>
            <input type="text" class="form-control" name="pesel" />
        </div>

        <div class="form-group">
            <label for="pesel">Specjalizacja:</label><br/><br/>
            
            @foreach($specializations as $specialization)
            <div class="form-check row col-sm-10">
                <label class="form-check-label">{{$specialization->name}}</label>
                <input type="checkbox" class="form-check" name="specializations[]" value="{{$specialization->id}}" /><br/>
            </div>    
            @endforeach
            
        </div>

        <input type="hidden" name="status" value="Active"/>

        <input type="submit" value="Dodaj" class="btn btn-primary"/>
    </form>
</div>
@endsection('content')