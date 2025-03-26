@extends('layout.App')
@section('content')


    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif



    <div class="container center-form">
        <div class="form-container">
            <h1 class="mb-2 text-center">Add new category</h1>

            <form action="{{ route('familles.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="libelle" class="form-label">Libelle</label>
                    <input type="text" class="form-control" id="libelle" name="libelle" value="{{old('libelle')}}">
                    @error('libelle')
                        <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="img" class="form-label">Image</label>
                    <input type="file" class="form-control" id="img" name="image" value = "{{old('image')}}">
                    @error('image')
                        <p class="alert alert-danger">{{$message}}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100">Save</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
