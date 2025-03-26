@extends('layout.App')
@section('content')
@php
    use App\Models\SousFamille;
    use App\Models\Marque;
    use App\Models\Unite;
    $sousfamilles = SousFamille::all();
    $marques = Marque::all();
    $unites = Unite::all();
@endphp
<style>
    .center-form {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        height: 100vh;
        margin-top: 20px
    }
    .form-container {
        background-color: #ffffffc6;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }


</style>
<div class="container center-form">
    <div class="form-container">
        <h2 class="text-center mb-4">Add new Product</h2>
        <form action="{{route('produits.store')}}" method="post">
            @csrf
            <div>
                <label for="codebarre" class="form-label">Code</label>
                <input type="text" name="codebarre" id="codebarre" class="form-control w-100" value="{{old('codebarre')}}">
                @error('codebarre')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="designation" class="form-label">Designation</label>
                <input type="text" name="designation" id="designation"class="form-control w-100" value="{{old('designation')}}">
                @error('designation')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="prixht" class="form-label">Prix HT</label>
                <input type="text" name="prix_ht" id="prixht"  class="form-control w-100" value="{{old('prix_ht')}}">
                @error('prix_ht')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="tva" class="form-label">Tva</label>
                <input type="text" name="tva" id="tva" class="form-control w-100" value="{{old('tva')}}">
                @error('tva')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description"  id="description" class="form-control w-100" value="{{old('description')}}">
                @error('description')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="img" class="form-label">Image</label>
                <input type="file" name="image"  id="img" class="form-control w-100" value="{{old('image')}}">
                @error('image')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="sous_famille" class="form-label">Category</label>
                <select name="sous_famille_id" class="form-select w-100">
                    @foreach ($sousfamilles as $sousfamille)
                        <option value="{{$sousfamille->id}}">{{$sousfamille->libelle_sous_famille}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="marque" class="form-label">Marque</label>
                <select name="marque_id" class="form-select w-100">
                    @foreach ($marques as $marque)
                        <option value="{{$marque->id}}">{{$marque->marque}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="unite_id" class="form-label">Unite</label>
                <select name="unite_id" class="form-select w-100">
                    @foreach ($unites as $unite)
                        <option value="{{$unite->id}}">{{$unite->unite}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="stock" class="form-label">Stock</label>
                <input type="text" name="stock"  id="stock" class="form-control w-100" value="{{old('stock')}}">
                @error('stock')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-3 w-100">Save</button>
        </form>
    </div>
</div>
@endsection
