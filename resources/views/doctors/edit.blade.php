@extends('template')

@section('title')
    @if(isset($title))
        - {{$title}}
    @endif    
@endsection

@section('content')
<div class="container">
    <h2>Edycja lekarza</h2>
    <form action="{{ action ('DoctorController@editStore') }}" method="POST" role="form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <input type="hidden" name="id" value="{{ $doctor->id }}" />
        
        <div class="form-group">
            <label for="name">Nazwisko i imię:</label>
        <input type="text" class="form-control" name="name" value="{{ $doctor->name }}" />
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="text" class="form-control" name="email" value="{{ $doctor->email }}" />
        </div>
       
        <div class="form-group">
            <label for="phone">Telefon:</label>
            <input type="phone" class="form-control" name="phone" value="{{ $doctor->phone }}" />
        </div>

        <div class="form-group">
            <label for="address">Adres:</label>
            <input type="address" class="form-control" name="address" value="{{ $doctor->address }}" />
        </div>

        <div class="form-group">
            <label for="pesel">PESEL:</label>
            <input type="text" class="form-control" name="pesel" value="{{ $doctor->pesel }}" />
        </div>

        <div class="form-group">
            <label for="pesel">Specjalizacja:</label><br/><br/>
            
            @foreach($specializations as $specialization)
                <div class="form-check row col-sm-10">
                @if($doctor->specializations->contains($specialization->id))
                    <label class="form-check-label">{{$specialization->name}}</label>
                    <input type="checkbox" class="form-check" name="specializations[]" value="{{$specialization->id}}" checked/><br/>
                @else
                    <label class="form-check-label">{{$specialization->name}}</label>
                    <input type="checkbox" class="form-check" name="specializations[]" value="{{$specialization->id}}" /><br/>
                @endif
                </div>
                                           
            @endforeach
            
        </div>

        <div class="form-group">
            <label for="pesel">Status:</label>
                @if($doctor->status == 'Active')
                    Aktywny <input type="radio" class="form-control" name="status" value="Active" checked = "checked" />              
                    Nieaktywny <input type="radio" class="form-control" name="status" value="Inactive" />
                @else
                    Aktywny <input type="radio" class="form-control" name="status" value="Active"  />              
                    Nieaktywny <input type="radio" class="form-control" name="status" value="Inactive" checked = "checked" />
                @endif
        </div>

        <input type="submit" value="Edycja" class="btn btn-primary"/>
    </form>
</div>
@endsection('content')