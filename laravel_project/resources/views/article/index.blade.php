@extends('layout.App')
@section('content')
    <div class="container" align="center">
        <h1>Products List</h1>
    <a href="{{route ("articles.create")}}" class="btn btn-primary">Add +</a>
    <table class="table table-striped">

        <thead>
            <tr style="background-color: gray; color:white">
                <th>ID</th>
                <th>Designation</th>
                <th>Prix_HT</th>
                <th>Tva</th>
                <th>Prix_TTC</th>
                <th>stock</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($articles as $article)
            <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->designation}}</td>
            <td>{{$article->prix_HT}}</td>
            <td>{{$article->tva}}</td>
            <td>{{$article->prix_HT*($article->tva/100)}}</td>
            <td>{{$article->stock}}</td>
            <td>
                <a href="{{route('articles.edit', $article->id)}}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
            </td>
            <td>
                <form action="{{route('articles.destroy', $article->id)}}" method="post" onsubmit="return confirm('do you realy want to delete it !!')">
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


