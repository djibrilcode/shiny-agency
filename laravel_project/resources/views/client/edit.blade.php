@extends('layout.App')
@section('content')
    <div class="container">
        <h1 class=" mb-2">New Product</h1>

        <form action="{{ route ('clients.update', $customer->id)}}" method="post">
            @csrf
            @method('put')
            <div class="">
                <label for="firstName" class="form-label">first name</label>
                <input type="text" class="form-control w-50" id="firstName" name="first_name" value="{{$customer->first_name}}" required>
            </div>
            <div >
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control w-50" id="lastName" name="last_name" value="{{$customer->last}}" required>
            </div>
            <div >
                <label for="email" class="form-label">email</label>
                <input type="text" class="form-control w-50" id="email" name="email" value="{{$customer->email}}" required>
            </div>
            <div>
                <label for="phone" class="form-label">phone number</label>
                <input type="text" class="form-control w-50" id="phone" name="phone" value="{{$customer->phone}}" required>
            </div>

            <div>
                <label for="adress" class="form-label">Adress</label>
                <input type="text" class="form-control w-50" id="adress" name="adress" value="{{$customer->address}}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">update</button>
    </div>
@endsection
