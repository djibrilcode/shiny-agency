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
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-danger">
            {{ session( 'success' ) }}
        </div>
    @endif



    <div class="container center-form">
        <div class="form-container">
            <h2 class="mb-2 texte-center">Nouveau Etat</h2>
            <form action="{{ route('etats.store')}}" method="post">
                <div class="mb-3">
                    <label for="status" class="form-label">Etat</label>
                    <input type="text" name="etat" id="status" class="form-control" value="{{old('etat')}}">
                    @error('etat')
                        <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Save</button>
                @csrf
            </form>
        </div>
    </div>
@endsection
