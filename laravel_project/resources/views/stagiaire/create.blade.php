@extends('layout.App')
@section('content')
@php
    use App\Models\Filiere;
    $filieres = Filiere::all();
@endphp
        <div class="container">
        <h1 class=" mb-2">New Stagiaire</h1>
        <form action="{{ route ('stagiaires.store')}}" method="post">
            @csrf
            <div class="">
                <label for="cef" class="form-label">Cef</label>
                <input type="text" class="form-control w-50" id="cef" name="cef" placeholder="cef" value="{{old('cef')}}">
                @error('cef')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div >
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control w-50" id="prix_ht" name="nom" placeholder="nom" value="{{old('nom')}}">
                @error('nom')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div >
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control w-50" id="prenom" name="prenom" placeholder="prenom" value="{{old('prenom')}}">
                @error('prenom')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="adress" class="form-label">adresse</label>
                <input type="text" class="form-control w-50" id="stock" name="adresse" placeholder="adresse" value="{{old('adresse')}}">
                @error('adresse')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="ville" class="form-label">Ville</label>
                <input type="text" class="form-control w-50" id="ville" name="ville" placeholder="ville" value="{{old('ville')}}">
                @error('ville')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="filiere_id" class="form-label">filiere</label>
                <select name="filiere_id"  class="form-select w-50">
                    @foreach ($filieres as $filiere )
                        <option value="{{$filiere->id}}">{{$filiere->libelle}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">add</button>
        </form>
    </div>


@endsection
