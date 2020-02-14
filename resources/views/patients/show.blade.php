@extends('template')

@section('title')
    @if(isset($title))
        - {{$title}}
    @endif    
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                {{$patient->name}}
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Nazwisko:</td>
                        <td>{{$patient->name}}</td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td>{{$patient->email}}</td>
                    </tr>
                    <tr>
                        <td>Telefon:</td>
                        <td>{{$patient->phone}}</td>
                    </tr>
                    <tr>
                        <td>Adres:</td>
                        <td>{{$patient->address}}</td>
                    </tr>
                    <tr>
                        <td>PESEL:</td>
                        <td>{{$patient->pesel}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection('content')