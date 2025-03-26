@extends('layout.App')
@section('content')
    <div class="container ml-6">
        <h1 class=" mb-2">New Customer</h1>
        <form action="{{ route ('clients.store')}}" method="post">
            @csrf
            <div class="">
                <label for="firstName" class="form-label">first name</label>
                <input type="text" class="form-control w-50" id="firstName" name="first_name" required>
            </div>
            <div >
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control w-50" id="lastName" name="last_name" required>
            </div>
            <div >
                <label for="email" class="form-label">email</label>
                <input type="text" class="form-control w-50" id="email" name="email" required>
            </div>
            <div>
                <label for="phone" class="form-label">phone number</label>
                <input type="text" class="form-control w-50" id="phone" name="phone" required>
            </div>

            <div>
                <label for="adress" class="form-label">Adress</label>
                <input type="text" class="form-control w-50" id="adress" name="address" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Add</button>
        </form>
    </div>
@endsection
