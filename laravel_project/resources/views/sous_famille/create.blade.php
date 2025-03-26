@extends('layout.App')
@section('content')
@php
    use App\Models\Famille;
    $familles = Famille::all();
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
            <h1 class=" mb-2">New Sous-category</h1>

        <form action="{{ route ('sous_familles.store')}}" method="post">
            @csrf
            <div class="">
                <label for="libelle" class="form-label">libelle</label>
                <input type="text" class="form-control w-100" id="libelle" name="libelle_sous_famille">
                @error('libelle_sous_famille')
                    <p class="alert alert-danger">{{$message}}</p>
                @enderror
            </div>
            <div >
                <label for="img" class="form-label">Image</label>
                <input type="file" class="form-control w-100" id="img" name="image_sous_famille" value="{{old('image_sous_famille')}}">
                @error('image_sous_famille')
                    <p class="alert alert-danger">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="famille" class="form-label">Famille</label>
            </div>
            <select name="famille_id" class="form-select w-100">
                @foreach ($familles as $famille)
                    <option value="{{$famille->id}}">{{$famille->libelle}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary mt-3 w-100">save</button>
        </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
