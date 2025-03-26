@extends('layout.App')
@section('content')
    <div class="container" align="center">
        <h1>Filiere List</h1>
    <a href="{{route ("filieres.create")}}" class="btn btn-primary">New +</a>
    <table class="table table-striped">

        <thead>
            <tr style="background-color: gray; color:white">
                <th>ID</th>
                <th>Filiere</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($filieres as $filiere)
            <tr>
                <td>{{$filiere->id}}</td>
                <td>{{$filiere->libelle}}</td>
            <td>
                <a href="{{route('filieres.edit', $filiere->id)}}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
            </td>
            <td>
                <form action="{{route('filieres.destroy', $filiere->id)}}" method="post" onsubmit="return confirm('do you realy want to delete it !!')">
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


