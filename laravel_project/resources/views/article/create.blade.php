@extends('layout.App');
@section('content')
    <div class="container">
        <h1 class=" mb-2">New Product</h1>
        <form action="{{ route ('articles.store')}}" method="post">
            @csrf
            <div class="">
                <label for="designation" class="form-label">Désignation</label>
                <input type="text" class="form-control w-50" id="designation" name="designation" placeholder="Entrez la désignation" required>
            </div>
            <div >
                <label for="prix_ht" class="form-label">Prix HT</label>
                <input type="text" class="form-control w-50" id="prix_ht" name="prix_HT" placeholder="Entrez le prix hors taxes" required>
            </div>
            <div >
                <label for="tva" class="form-label">TVA (%)</label>
                <input type="text" class="form-control w-50" id="tva" name="tva" placeholder="Entrez le taux de TVA" required>
            </div>
            <div>
                <label for="stock" class="form-label">Stock</label>
                <input type="text" class="form-control w-50" id="stock" name="stock" placeholder="Entrez la quantité en stock" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Add</button>
        </form>
    </div>
    {{-- <div class="container mb-3">
        <h1>Add new article</h1>
        <form action="{{ route ('article.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="designation">designation</label>
                <input type="text" class="form-control" id="designation" placeholder="Enter designation" name = "designation">

                <label for="prix_ht">Prix_ht</label>
                <input type="text" class="form-control" placeholder="prix_ht" id="prix_ht" name = "prix_HT">

                <label for="tva">tva</label>
                <input type="text" name="tva" class="form-control" placeholder="enter tva" id="tva">

                <label for="stock">stock</label>
                <input type="text" name="stock" class="form-control" placeholder="enter stock" id="stock">
            </div>
            <button type="submit" class="btn btn-primary">store</button>
        </form>
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
