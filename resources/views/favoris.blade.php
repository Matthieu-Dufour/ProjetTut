@extends('default')

@section('title')
    Favoris
@endsection

@section('link')
    <link rel="stylesheet" href="{{ asset('/css/detail.css') }}">
@endsection

@section('content')

    foreach($favoris as $fav)
        @isset(Auth::user()->id)
            @if($fav->user_id == Auth::user()->id) <!-- à revoir -->
                <div class= "container">
                    <h1>{{$b->nom}}</h1>
                </div>
                <div class="container">
                    <div class="grid-vertical">
                        @isset($mushrooms)
                            @for($i = 0; $i < count($mushrooms); i++)
                                <div class="grid-article">
                                    <a href="/mushroom/{{ $mushrooms[$i][0]->id }}"><img src="{{ asset('/storage/img/'.$mushrooms[$i][0]->image) }}"></a>
                                    <a href="/mushroom/{{ $mushrooms[$i][0]->id }}"><p>{{ $mushrooms[$i][0]->nameLat }}</p></a>
                                    <a href="/mushroom/{{ $mushrooms[$i][0]->id }}"><p>{{ $mushrooms[$i][0]->nameLat }}</p></a>
                                </div>
                            @endfor
                        @endisset

                        

                    </div>
                </div>


@endsection