@extends('layout.App');
@section('content')
@php
    use App\Models\Filiere;
    $filieres = Filiere::all(); 
@endphp
        <div class="container">
        <h1 class=" mb-2">update Filiere</h1>
        <form action="{{ route ('filieres.update', $filiere->id)}}" method="post">
            @csrf
            @method('put')
            <div class="">
                <label for="libelle" class="form-label">Libelle</label>
                <input type="text" class="form-control w-50" id="libelle" name="libelle" value="{{$filiere->libelle}}" placeholder="libelle" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">save</button>
        </form>
    </div>


@endsection
