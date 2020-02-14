@extends('template')

@section('title')
    @if(isset($title))
        - {{$title}}
    @endif    
@endsection

@section('content')
<div class="container">
<h2>Wizyty</h2>
<a href="{{ URL::to('visits/create') }}">Dodaj nową wizytę</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Pacjent</th>
                <th scope="col">Lekarz</th>
                <th scope="col">Data</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach($visits as $visit)
            <tr>
                <th scope="row">{{$visit->id}}</th>
                <td>{{$visit->patient->name}}</td>
                <td>{{$visit->doctor->name}}</td>
                <td>{{$visit->date}}</td>
                
            </tr>
        
        @endforeach
        </tbody>
    </table>
</div>
@endsection('content')