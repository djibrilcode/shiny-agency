@extends('layout.App')
@section('content')
    <div class="container">
        <h1 class=" mb-2"> update Product {{$article->id}}</h1>

        <form action="{{ route ('articles.update', $article->id)}}" method="post">
            @csrf
            @method('put')
            <div class="">
                <label for="designation" class="form-label">Désignation</label>
                <input type="text" class="form-control w-50" id="designation" name="designation" value="{{$article->designation}}" placeholder="Entrez la désignation" required>
            </div>
            <div >
                <label for="prix_ht" class="form-label">Prix HT</label>
                <input type="text" class="form-control w-50" id="prix_ht" name="prix_HT" value="{{$article->prix_HT}}" placeholder="Entrez le prix hors taxes" required>
            </div>
            <div >
                <label for="tva" class="form-label">TVA (%)</label>
                <input type="text" class="form-control w-50" id="tva" name="tva" value="{{$article->tva}}" placeholder="Entrez le taux de TVA" required>
            </div>
            <div>
                <label for="stock" class="form-label">Stock</label>
                <input type="text" class="form-control w-50" id="stock" name="stock" value="{{$article->stock}}" placeholder="Entrez la quantité en stock" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">update</button>

        {{-- <form action="{{ route('article.update')}}" method="post" >
            @csrf
            @method('put')
            <div class="">
                <label for="designation" class="form-label">Désignation</label>
                <input type="text" class="form-control w-50" id="designation" name="designation" value="{{$article->designation}}" placeholder="Entrez la désignation" required>
            </div>
            <div >
                <label for="prix_ht" class="form-label">Prix HT</label>
                <input type="text" class="form-control w-50" id="prix_ht" name="prix_HT" value="{{$article->prix_ht}}" placeholder="Entrez le prix hors taxes" required>
            </div>
            <div >
                <label for="tva" class="form-label">TVA (%)</label>
                <input type="text" class="form-control w-50" id="tva" name="tva" value="{{$article->tva}}" placeholder="Entrez le taux de TVA" required>
            </div>
            <div>
                <label for="stock" class="form-label">Stock</label>
                <input type="text" class="form-control w-50" id="stock" name="stock" value="{{$article->stock}}" placeholder="Entrez la quantité en stock" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">update</button>
        </form> --}}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
