@extends('Layouts/master')
@section('container')
<h1>
            {{
                "Bienvenu à l'Assemblée de ".$church->stationName
            }}
        </h1>
        <h3>
            {{
                "ici : ".$church->stationSlogang
            }}
        </h3>
        <hr>

        <a href="{{ route('transfertAmember', ['codeMember' => 'test']) }}">Transfer à member</a>
@endsection



