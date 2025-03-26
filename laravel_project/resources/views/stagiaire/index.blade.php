@extends('layout.App')
@section('content')
@if (session('success'))
    <div class="">
        {{ session('success') }}
    </div>
@endif
    <div class="container" align="center">
        <h1>Stagiaire List</h1>
        <a href="{{route('stagiaires.create')}}" class="btn btn-primary">New +</a>
        <table class="table table-striped">
            <thead>
                <tr style="background-color: gray; color:white">
                    <th>Cef</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Filiere</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stagiaires as $stagiaire)
                    <tr>
                        <td>{{$stagiaire->cef}}</td>
                        <td>{{$stagiaire->nom}}</td>
                        <td>{{$stagiaire->prenom}}</td>
                        <td>{{$stagiaire->adresse}}</td>
                        <td>{{$stagiaire->ville}}</td>
                        <td>{{$stagiaire->filiere->libelle}}</td>
                        <td>
                            <a href="{{route('stagiaires.edit', $stagiaire->id)}}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                        </td>
                        <td>
                            <form action="{{route('stagiaires.destroy', $stagiaire->id)}}" method="post" onsubmit="return confirm('Do you really want to delete it?')">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $stagiaires->links() }}
    </div>
@endsection
