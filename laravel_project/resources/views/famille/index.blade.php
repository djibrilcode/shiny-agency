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
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif
@if (session('delete'))
<div class="alert alert-success">
    {{session('delete')}}
</div>
@endif
<div class="container table-container">
    <h2>Listes Catégories</h2>
    <a href="{{ route('familles.create') }}" class="btn btn-primary">New +</a>

    <table class="table table-striped text-lg-center text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th colspan="2">Description</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($familles as $famille)
                <tr>
                    <td>{{ $famille->id }}</td>
                    <td><img src="{{ $famille->image }}" class=".img-thumbnail" width="70" height="50" alt="{{ $famille->libelle }}"></td>
                    <td class="text-left">{{ $famille->libelle }}</td>
                    <td>
                        <a href="{{ route('familles.edit', $famille->id) }}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                    </td>
                    <td>
                        <form action="{{ route('familles.destroy', $famille->id) }}" method="post" onsubmit="return confirm('Do you really want to delete it?')">
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
