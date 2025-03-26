@extends('layout.App')
@section('content')
    <style>
        body {
            background-color: #f8f9fa;
        }
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

    <div class="container text-center">
        <h2>Marque List</h2>
        <a href="{{ route('marques.create') }}" class="btn btn-primary">New Marque</a>
    </div>

    <div class="container table-container">
        <table class="table table-striped table-bordered text-center">
            <thead>
                <tr class="table-dark">
                    <th>Marque</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($marques as $marque)
                    <tr>
                        <td>{{ $marque->marque }}</td>
                        <td>
                            <a href="{{ route('marques.edit', $marque->id) }}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                        </td>
                        <td>
                            <form action="{{ route('marques.destroy', $marque->id) }}" method="post" onsubmit="return confirm('Do you really want to delete it?')">
                                @csrf
                                @method("delete")
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
