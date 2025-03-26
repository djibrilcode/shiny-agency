@extends('layout.App')
@section('content')
    <div class="container">
        <h1 class=" mb-2">Add new Unite</h1>

        <form action="{{ route ('unites.update', $unite->id)}}" method="post">
            @csrf
            @method('put')
            <div class="">
                <label for="unite" class="form-label">Unite</label>
                <input type="text" class="form-control w-50" id="unite" name="unite" value="{{$unite->unite}}">
            </div>
            <button type="submit" class="btn btn-primary mt-3">save</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
