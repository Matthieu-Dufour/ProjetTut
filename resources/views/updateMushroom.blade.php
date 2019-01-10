@extends('default')

@section('title')
    Edition d'un champignon
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/detail.css') }}">
@endsection

@section('content')

<div class="container" style="margin-top: 25px">
    <h1>Editer un champignon</h1>
</div>

<div class="container" style="margin-top: 25px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editer un champignon</div>
                    <div class="card-body">
                        <form method="POST" action="">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="nameLat" class="col-sm-4 col-form-label text-md-right">Nom latin : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="nameLat" id="nameLat" value="{{$mushroom->nameLat}}" required />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="nameFr" class="col-sm-4 col-form-label text-md-right">Nom français : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="nameFr" id="nameFr" value="{{$mushroom->nameFr}} required />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="surname" class="col-sm-4 col-form-label text-md-right">Surnom : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="surname" id="surname" value="{{$mushroom->surname}} required />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="edibility" class="col-sm-4 col-form-label text-md-right">Comestibilité : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="edibility" id="edibility" value="{{$mushroom->edibility}} required />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="biotope" class="col-sm-4 col-form-label text-md-right">Biotope : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="biotope" id="biotope" value="{{$mushroom->biotope}} required />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="stipe" class="col-sm-4 col-form-label text-md-right">Stipe : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="stipe" id="stipe" value="{{$mushroom->Stipe}} />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="cap" class="col-sm-4 col-form-label text-md-right">Chapeau : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="cap" id="cap" value="{{$mushroom->cap}} required />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="trophic_status" class="col-sm-4 col-form-label text-md-right">Type trophique : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="trophic_status" id="trophic_status" value="{{$mushroom->trophic_status}} required />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="smell" class="col-sm-4 col-form-label text-md-right">Odeur : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="smell" id="smell" value="{{$mushroom->smell}} />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="groupe" class="col-sm-4 col-form-label text-md-right">Groupe : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="groupe" id="groupe" value="{{$mushroom->groupe}} />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="lames" class="col-sm-4 col-form-label text-md-right">Lames : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="lames" id="lames" value="{{$mushroom->lames}} />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="confusion" class="col-sm-4 col-form-label text-md-right">Confusion : </label>
                                    <div class="col-md-6">
                                        <select name="confusion" id="confusion">
                                            @foreach($mushrooms as $mushroom)
                                                <option value="{{ $mushroom->id }}">{{ $mushroom->nameLat}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="flesh" class="col-sm-4 col-form-label text-md-right">Chair : </label>
                                    <div class="col-md-6">
                                        <input type="textarea" name="flesh" id="flesh" value="{{$mushroom->flesh}}/>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-sm-4 col-form-label text-md-right">Image : </label>
                                    <div class="col-md-6">
                                        <input type="file" name="image" id="image"  accept="image/*" value="{{$mushroom->image}} required />
                                    </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <input type="submit" value="Editer le champignon"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection