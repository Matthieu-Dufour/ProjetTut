@extends('default')

@section('title')
    Création de coffret
@endsection


@section('link')
    <link rel="stylesheet" href="{{ asset('/css/detail.css') }}">
@endsection

@section('content')

<div class="container" style="margin-top: 25px">
    <h1>Nouveau champignon</h1>
</div>

<div class="container" style="margin-top: 25px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajouter un champignon</div>
                    <div class="card-body">
                        <form method="POST" action="">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="nameLat" class="col-sm-4 col-form-label text-md-right">Nom latin : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="nameLat" id="nameLat" required />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="nameFr" class="col-sm-4 col-form-label text-md-right">Nom français : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="nameFr" id="nameFr" required />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="surname" class="col-sm-4 col-form-label text-md-right">Surnom : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="surname" id="surname" required />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="edibility" class="col-sm-4 col-form-label text-md-right">Comestibilité : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="edibility" id="edibility" required />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="biotope" class="col-sm-4 col-form-label text-md-right">Biotope : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="biotope" id="biotope" required />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="stipe" class="col-sm-4 col-form-label text-md-right">Stipe : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="stipe" id="stipe" />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="cap" class="col-sm-4 col-form-label text-md-right">Chapeau : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="cap" id="cap" required />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="trophic_status" class="col-sm-4 col-form-label text-md-right">Type trophique : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="trophic_status" id="trophic_status" required />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="smell" class="col-sm-4 col-form-label text-md-right">Odeur : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="smell" id="smell"  />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="groupe" class="col-sm-4 col-form-label text-md-right">Groupe : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="groupe" id="groupe" />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="lames" class="col-sm-4 col-form-label text-md-right">Lames : </label>
                                    <div class="col-md-6">
                                        <input type="text" name="lames" id="lames" />
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
                                        <input type="textarea" name="flesh" id="flesh" />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-sm-4 col-form-label text-md-right">Image : </label>
                                    <div class="col-md-6">
                                        <input type="file" name="image" id="image"  accept="image/*" required />
                                    </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <input type="submit" value="Ajouter le champignon"/>
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