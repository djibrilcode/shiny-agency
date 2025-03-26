@extends('layout.App')
@section('content')
@php
    use App\Models\SousFamille;
    use App\Models\Marque;;
    use App\Models\Unite;;
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

    .form-control, .form-select {
        width: 100%;
    }
</style>
    <div class="container center-form">
        <div class="form-container">
            <h2>Update: {{$produit->designation}}</h2>
            <form action="{{route('produits.update', $produit->id)}}" method="post">
                @csrf
                @method('put')
                <div>
                    <label for="codebarre" class="form-label">Code</label>
                    <input type="text" name="codebarre" id="codebarre" placeholder="Code barre" class="form-control w-100" value = "{{$produit->codebarre}}">
                    @error('codebarre')
                        <p class="alert alert-danger"> $message </p>
                    @enderror
                </div>
                <div>
                    <label for="designation" class="form-label">Designation</label>
                    <input type="text" name="designation" id="designation" placeholder="Designation" class="form-control w-100" value = "{{$produit->designation}}">
                    @error('designation')
                        <p class="alert alert-danger"> $message </p>
                    @enderror
                </div>
                <div>
                    <label for="prixht" class="form-label">Prix HT</label>
                    <input type="text" name="prix_ht" id="prixht" placeholder="Prix Ht" class="form-control w-100" value = "{{$produit->prix_ht}}">
                    @error('prixht')
                        <p class="alert alert-danger"> $message </p>
                    @enderror
                </div>
                <div>
                    <label for="tva" class="form-label">Tva</label>
                    <input type="text" name="tva" id="tva" placeholder="Tva (%)" class="form-control w-100" value = "{{$produit->tva}}">
                    @error('tva')
                        <p class="alert alert-danger"> $message </p>
                    @enderror
                </div>
                <div>
                    <label for="description" class="form-label">Description</label>
                    <input type="text" name="description" placeholder="Description" id="description" class="form-control w-100" value = "{{$produit->description}}">
                    @error('description')
                        <p class="alert alert-danger"> $message </p>
                    @enderror
                </div>
                <div>
                    <label for="img" class="form-label">Image</label>
                    <input type="file" name="image" placeholder="image" id="img" class="form-control w-100"  value = "{{$produit->image}}">
                    @error('image')
                        <p class="alert alert-danger"> $message </p>
                    @enderror
                </div>
                <div>
                    <label for="sous_famille" class="form-label">Category</label>
                    <select name="sous_famille" class="form-select w-100">
                        @foreach ($sousfamilles as $sousfamille)
                            <option value="{{$sousfamille->id}}" {{$sousfamille->id == $produit->sous_famille_id ? "selected":""}} >{{$sousfamille->libelle_sous_famille}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="marque" class="form-label">Marque</label>
                    <select name="marque" class="form-select w-100">
                        @foreach ($marques as $marque)
                            <option value="{{$marque->id}}" {{$marque->id == $produit->marque_id?"selected":""}}>{{$marque->marque}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="unite" class="form-label">Unite</label>
                    <select name="unite" class="form-select w-100">
                        @foreach ($unites as $unite)
                            <option value="{{$unite->id}}" {{$unite->id == $produit->unite_id?"selected":""}}>{{$unite->unite}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="stock" class="form-label">Stock</label>
                    <input type="text" name="stock" placeholder="Stock" id="stock" class="form-control w-100" value = "{{$produit->stock}}">
                    @error('stock')
                        <p class="alert alert-danger"> $message </p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>
        </div>

    </div>
@endsection
