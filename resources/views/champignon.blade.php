@extends('default')


@section('title')
    Champignon
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/detail.css') }}">
@endsection


@section('content')
<div class="container" style="margin-top: 25px">
            <div class="row">
                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-cog"></i>
                            <i class="fas fa-exclamation"></i>
                        </div>
                    </div>
                    <img id="img-detail" src="mush1.jpg">
                </div>
                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <h3>Champignon</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <h4>Champignus</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <p> Champ</p>
                        </div>
                        <div class="col-sm">
                            <p>Valeur</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <p> Champ</p>
                        </div>
                        <div class="col-sm">
                            <p>Valeur</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <p> Champ</p>
                        </div>
                        <div class="col-sm">
                            <p>Valeur</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <p> Champ</p>
                        </div>
                        <div class="col-sm">
                            <p>Valeur</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <p>Champ</p>
                        </div>
                        <div class="col-sm">
                            <p>Valeur</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
@endsection