<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>
<nav class="navbar navbar-inverse">
  <!-- <ul class="nav navbar-nav">
    <li><a href="#">Orders</a></li>
    <li><a href="{{route('server-index')}}">Products</a></li>
  </ul> -->
  <p class="navbar-text">Admin Panel</p>
</nav>
<div class="container">
  {{-- Button 1 --}}
    <div class="text-right">
    <a href="{{route('server-create-products')}}" class="btn btn-dark ">New Product</a>
  </div>
</div>

{{--  Creating Order Table --}}
<div class="container">
    <h1>Orders</h1>

    <table class="table table-hover mt-2">
        <thead>
            <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Customer Notes</th>
            <th>Action</th>
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
                    <a href="/complete/order/{{$order->id}}" class="btn btn-success">Mark as Done</a>
                    <a href="/delete/order/{{$order->id}}" class="btn btn-danger">Delete Order</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



</div>
</body>

</html>

