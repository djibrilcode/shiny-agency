@extends('layout.App');
@section('content')
@if (session('supp'))
<div class="alert alert-danger">
    {{ session( 'supp' ) }}
</div>
@endif
    <div class="container">
        <h2>Liste des etats</h2>
        <a href="{{ route('etats.create')}}" class="btn btn-primary">Ajouter</a>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>
                       Status
                    </th>
                    <th colspan="2">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($etats as $etat)
                    <tr>
                        <td>{{ $etat->etat }}</td>
                        <td>
                            <a href="{{ route ('etats.edit', $etat->id)}}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                            <form action="{{ route('etats.destroy', $etat->id) }}" method="post" onsubmit="return confirm('Doyou want to delete it ?')">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
