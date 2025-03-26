@extends('layout.App')
@section('content')

<style>
    .table-container {
        margin-top: 20px;
    }
    .table {
        background-color: #ffffff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .table thead {
        background-color: #343a40;
        color: white;
    }
    .table th, .table td {
        vertical-align: middle;
    }
    .btn-primary {
        margin-bottom: 20px;
    }
    .btn-info, .btn-danger {
        margin: 0 5px;
    }
</style>
@if (session('success'))
    <div class="alert alert-danger">
        {{ session( 'success' ) }}
    </div>
@endif
<div class="container text-center">
    <h2>Sous Catégories</h2>
    <a href="{{ route('sous_familles.create') }}" class="btn btn-primary">New +</a>
</div>

<div class="container table-container">
    <table class="table table-striped text-lg-center text-center">
        <thead>
            <tr class="table-dark">
                <th>ID</th>
                <th colspan="2">Description</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sousfamilles as $sousfamille)
                <tr>
                    <td>{{ $sousfamille->id }}</td>
                    <td>
                        <img src="{{ $sousfamille->image_sous_famille }}" class=".img-thumbnail" width="50" height="50" alt="{{ $sousfamille->libelle_sous_famille }}">
                    </td>
                    <td>
                        {{ $sousfamille->libelle_sous_famille }}
                    </td>
                    <td>
                        <a href="{{ route('sous_familles.edit', $sousfamille->id) }}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                    </td>
                    <td>
                        <form action="{{ route('sous_familles.destroy', $sousfamille->id) }}" method="post" onsubmit="return confirm('Do you really want to delete it?')">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection




