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


<body class="bg-dark">
<nav class="navbar navbar-inverse bg-primary" >
  <!-- <ul class="nav navbar-nav">
    <li><a href="#">Orders</a></li>
    <li><a href="{{route('server-index')}}">Products</a></li>
  </ul> -->
  <h1 class="navbar-text text-dark">Admin Panel</h1>
</nav>
<div class="container">
  {{-- Button 1 --}}
    <div class="text-right">
    <a href="{{route('server-create-products')}}" class="btn btn-primary" >New Product</a>
    </div>
  {{-- Button 2 --}}
  {{-- <div class="text-left">
    <a href="{{route('server-orders')}}" class="btn btn-dark ">Orders</a>
  </div> --}}
</div>

@yield('content')

{{-- Products List Start --}}

{{-- <div class="container">
    <h1>Products</h1>

    <table class="table table-hover mt-2">
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
                <img src="products/{{ $product->image}}"
                class="rounded-circle" width="50" height="50"
                />
            </td>
            <td>
                <a href="/server/edit/product/{{ $product->id}}" class="btn btn-dark">Edit</a>
                <a href="/server/delete/product/{{ $product->id}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div> --}}

{{-- Products List End --}}

{{-- New Products Start --}}

{{-- <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-8">
          <div class="card mt-3">
              <form method="POST" action="{{route('server-products-store')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" name="name" class="form-control"
                      value="{{old('name')}}""
                      >
                      @if ($errors->has('name'))
                      <span class="text-danger">
                          {{ $errors->first('name')}}
                      </span>

                      @endif
                  </div>
                  <div class="form-group">
                      <label for="">Description</label>
                      <textarea name="description" class="form-control"
                      value="{{old('description')}}"
                      ></textarea>
                      @if ($errors->has('description'))
                      <span class="text-danger">
                          {{ $errors->first('description')}}
                      </span>

                      @endif
                  </div>
                  <div class="form-group">
                      <label for="">Price</label>
                      <input type="text" name="price" class="form-control"
                      value="{{old('price')}}"
                      >
                      @if ($errors->has('price'))
                      <span class="text-danger">
                          {{ $errors->first('price')}}
                      </span>

                      @endif
                  </div>
                  <div class="form-group">
                      <label for="">Image</label>
                      <input type="file" name="image" class="form-control"
                      >
                  </div>

                  <button type="submit" class="btn btn-dark m-2">Create</button>

              </form>
          </div>
      </div>
    </div>

</div> --}}

{{-- New Products End --}}

</body>
</html>
