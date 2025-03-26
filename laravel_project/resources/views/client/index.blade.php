@extends('layout.App')
@section("content")

    <div align="center">
        <h1>Customers List</h1>
        <a href="{{route ("clients.create")}}" class="btn btn-primary">Add +</a>
        <table class="table table-striped">

            <thead style="background-color: gray; color:white">
                <tr>
                    <th>#</th>
                    <th>First</th>
                    <th>Last</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>adress</th>
                    <th colspan="2">action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->first_name}}</td>
                    <td>{{$customer->last_name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->address}}</td>
                    <td>
                        <a href="{{route ('clients.edit', $customer->id )}}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                    </td>
                    <td>
                        <form action=" {{ route('clients.destroy', $customer->id)}} " method="post"
                            onsubmit= "return confirm('do you want to delte this customer ?')">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
