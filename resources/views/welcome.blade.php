@extends('template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2 text-center" style="margin-top: 200px text-color">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    <h1>System zarządzania przychodnią lekarską</h1>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection