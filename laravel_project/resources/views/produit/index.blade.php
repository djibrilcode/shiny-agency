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
    <div class="text-center">
        <h2>Product List</h2>
        <a href="{{ route('produits.create') }}" class="btn btn-primary">New Product</a>
    </div>
    <div class="container table-container">
        <table class="table table-striped  text-lg-center text-center">
            <thead class="table-dark">
                <tr>
                    <th colspan="2">Designation</th>
                    <th>Prix HT</th>
                    <th>TVA (%)</th>
                    <th>Category</th>
                    <th>Marque</th>
                    <th>Unite</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produits as $produit)
                    <tr>
                        <td>
                            <img src="{{$produit->image}}" class=".img-thumbnail " width="50" height="45" alt="{{ $produit->designation }}">
                        </td>
                        <td>
                            {{ $produit->designation }}</td>
                        <td>{{ $produit->prix_ht }}</td>
                        <td>{{ $produit->tva }}</td>
                        <td>{{ $produit->sous_famille->libelle_sous_famille ?? 'N/A' }}</td>
                        <td>{{ $produit->marque->marque ?? 'N/A' }}</td>
                        <td>{{ $produit->unite->unite ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('produits.edit', $produit->id) }}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                        </td>
                        <td>
                            <form action="{{ route('produits.destroy', $produit->id) }}" method="post" onsubmit="return confirm('Do you really want to delete it?')">
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

