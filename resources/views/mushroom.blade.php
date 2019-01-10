@extends('default')


@section('title')
    @foreach($liste as $champi)
        {{$champi->nameLat}}
    @endforeach
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/detail.css') }}">
@endsection

@section('content')
    @foreach($liste as $champi)
        <div class="container" style="margin-top: 25px">
            <h1>{{$champi->nameLat}} - {{$champi->nameFr}}</h1>
        </div>

        <div class="container" style="margin-top: 25px">
            <div class="row">
                <img src="{{ asset('/storage/img/'.$champi->img) }}">
                <p>Surnom : {{$champi->surname}}</p>
                <p>Comestibilité : {{$champi->edibility}}</p>
                <p>Biotope : {{$champi->biotope}}</p>
                <p>Stipe : {{$champi->stipe}}</p>
                <p>Chapeau : {{$champi->cap}}</p>
                <p>Type trophique : {{$champi->trophic_status}}</p>
                <p>Odeur : {{$champi->smell}}</p>
                <p>Groupe : {{$champi->groupe}}</p>
                <p>Lames : {{$champi->lames}}</p>
                <p>Confusion : {{$champi->confusion}}</p>
                <p>Chair : {{$champi->flesh}}</p>
            </div>
            <a href="{{ URL::previous() }}"><button type="button" class="btn btn-secondary">Retour</button></a>
        </div>
    @endforeach
@endsection