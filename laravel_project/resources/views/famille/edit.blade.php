@extends('layout.App')
@section('content')
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

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {$error}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif




    <div class="container center-form">
        <div class="form-container">
            <h1 class="mb-2 text-center">Update category:{{$famille->libelle}}</h1>

            <form action="{{ route('familles.update', $famille->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="libelle" class="form-label">Libelle</label>
                    <input type="text" class="form-control" id="libelle" name="libelle" value="{{$famille->libelle}}">
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Image</label>
                    <input type="file" class="form-control" id="img" name="image" value="{{$famille->image}}">
                </div>
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
