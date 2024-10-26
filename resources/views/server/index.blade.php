@extends('server.master')

@section('content')

<div class="tables bg-light">
    <div class="container">
        <h1>Products</h1>

        <table class="table table-hover mt-2 table-dark">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($products as $product )
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <img src="{{asset('product/'. $product->image)}}"
                    class="rounded-circle" width="50" height="50"
                    />
                </td>
                <td>
                    <a href="/server/edit/product/{{ $product->id}}" class="btn btn-primary">Edit</a>
                    <a href="/server/delete/product/{{ $product->id}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            </tbody>
        </table>
    </div>
    <div class="container">
        <h1>Orders</h1>

        <table class="table table-hover mt-2 table-dark">
            <thead>
                <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Customer Notes</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order )
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->firstname}}</td>
                    <td>{{$order->lastname}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->contact}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->notes}}</td>
                    <td>
                        {{-- <a href="/server/complete/order/{{$order->id}}" class="btn btn-success">Mark as Done</a> --}}
                        @if($order->status != 'done')
                        <a href="/server/complete/order/{{$order->id}}" class="btn btn-success">Mark as Done</a>
                        @else
                        <span class="text-success">Done</span>
                        @endif

                        <a href="/server/delete/order/{{$order->id}}" class="btn btn-danger">Delete Order</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



    </div>

</div>
@endsection()
