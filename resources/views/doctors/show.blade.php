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
                {{$doctor->name}}
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Nazwisko:</td>
                        <td>{{$doctor->name}}</td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td>{{$doctor->email}}</td>
                    </tr>
                    <tr>
                        <td>Telefon:</td>
                        <td>{{$doctor->phone}}</td>
                    </tr>
                    <tr>
                        <td>Adres:</td>
                        <td>{{$doctor->address}}</td>
                    </tr>
                    <tr>
                        <td>Status:</td>
                        <td>{{$doctor->status}}</td>
                    </tr>
                    <tr>
                        <td>Specjalizacje:</td>
                        <td>
                            <ul>
                                @foreach ($doctor->specializations as $specialization)
                
                                    <li>{{ $specialization->name }}</li>  
                                
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection('content')
