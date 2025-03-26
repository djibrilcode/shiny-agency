@extends('layout.App')
@section('content')
<div class="text-center">
    <h2>Unite List</h2>
    <a href="{{ route ('unites.create')}}" class="btn btn-primary">New unite</a>
</div>
<table class="table table-striped table-bordered text-lg-center text-center">

    <thead>
        <tr class="table-dark">
            <th>Unite</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>

    <tbody>
    @foreach ($unites as $unite)
        <tr>
        <td>{{$unite->unite}}</td>
        <td>
            <a href="{{route('unites.edit', $unite->id)}}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
        </td>
        <td>
            <form action="{{route('unites.destroy', $unite->id)}}" method="post" onsubmit="return confirm('do you realy want to delete it !!')">
                @csrf
                @method("delete")
                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
            </form>
        </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
