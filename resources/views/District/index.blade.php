@extends('Layouts/master')
@section('container')
<h1>Welcome to the {{  $district->districtName }} District Office </h1>
{{
    $district->getChurchNumber()." Chuchs "
}}
<br><br>
@foreach ($district->getChurch() as $church)
    {{
        "Church Code:".$church->stationCode
    }}
    <br>
    {{ "Church Name  : " . $church->stationName }}
    <br>
    {{
        "Church Slogan : ".$church->stationSlogang
    }}
    <br>
    <a href="{{route('church', ['churchCode' => $church->stationCode])}}">Open</a>
    <hr>

@endforeach

@endsection
