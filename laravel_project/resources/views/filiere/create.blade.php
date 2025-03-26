@extends('layout.App');
@section('content')
@php
    use App\Models\Filiere;
    $filieres = Filiere::all(); 
@endphp
        <div class="container">
        <h1 class=" mb-2">New Filiere</h1>
        <form action="{{ route ('filieres.store')}}" method="post">
            @csrf
            <div class="">
                <label for="libelle" class="form-label">Libelle</label>
                <input type="text" class="form-control w-50" id="libelle" name="libelle" placeholder="libelle" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">add</button>
        </form>
    </div>


@endsection
