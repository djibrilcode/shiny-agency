@extends('layout.App')
@section('content')
@php
    use App\Models\Famille;
    $familles = Famille::all();
@endphp
    <div class="container">
        <h1 class=" mb-2">Edit {{$sousfamille->libelle_sous_famille}}</h1>

        <form action="{{ route('sous_familles.update', $sousfamille->id) }}" method="post">
            @csrf
            @method('put')
            <div class="">
                <label for="libelle" class="form-label">Libelle</label>
                <input type="text" class="form-control w-50" id="libelle" name="libelle_sous_famille" value="{{$sousfamille->libelle_sous_famille}}">
            </div>
            <div>
                <label for="img" class="form-label">Image</label>
                <input type="file" class="form-control w-50" id="img" name="image_sous_famille" value="{{$sousfamille->image_sous_famille}}">
            </div>
            <div>
                <label for="famille" class="form-label">Famille</label>
            </div>
            <select name="famille" class="form-select w-50">
                @foreach ($familles as $famille)
                    <option value="{{$famille->id}}" {{$famille->id == $sousfamille->famille_id ? "selected" : ""}}>{{$famille->libelle}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary mt-3">Edit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
