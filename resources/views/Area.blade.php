@extends('Layouts/masterPages')

@section('container')

<h1 >
        Welcome to the {{ $area->areaName }} Area office of the Full Gospel Mission in Cameroun
    </h1>
    {{ $area->getNumberOfDistrict()." Districts " }}
    {{ $area->getNbreChurch()."  Churchs " }}
    <hr>
    @foreach ($area->getDistrictOfArea() as $dist)
        code : {{ $dist->districtCode  }} <br>
        Nom : {{ $dist->districtName }} <br>
        <a href="{{route('district', ['districtCode' => $dist->districtCode])}}">Open</a>
        <hr>
    @endforeach


@endsection






