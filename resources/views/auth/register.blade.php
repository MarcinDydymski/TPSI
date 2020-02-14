@extends('template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <h2>Rejestracja</h2>
               <form action="{{ action('PatientController@store')}}" method="POST" role="form">
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

                    <input type="hidden" name="status" value="Active" />

                    <input type="submit" value="Dodaj" class="btn btn-primary"/>
                  </form>


            </div>
        </div>
    </div>
</div>
@endsection
