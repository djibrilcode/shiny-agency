@extends('layout.App')
@section('content')
<div class="text-center">
    <h2>Order List</h2>
    <a href="{{ route('commandes.create') }}" class="btn btn-primary">New Order</a>
</div>
<table class="table table-striped table-bordered text-lg-center text-center">
    <thead>
        <tr class="table-dark">
            <th>Order ID</th>
            <th>Date</th>
            <th>Time</th>
            <th>Paid</th>
            <th>Payment Method</th>
            <th>Status</th>
            <th>User</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($commandes as $commande)
            <tr>
                <td>{{ $commande->id }}</td>
                <td>{{ $commande->date }}</td>
                <td>{{ $commande->heure }}</td>
                <td>{{ $commande->regle ? 'Yes' : 'No' }}</td>
                <td>{{ $commande->mode_reglement->name ?? 'N/A' }}</td>
                <td>{{ $commande->etat->name ?? 'N/A' }}</td>
                <td>{{ $commande->user->name ?? 'N/A' }}</td>
                <td>
                    <a href="{{ route('commandes.edit', $commande->id) }}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                </td>
                <td>
                    <form action="{{ route('commandes.destroy', $commande->id) }}" method="post" onsubmit="return confirm('Do you really want to delete it?')">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
