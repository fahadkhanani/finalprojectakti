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
<nav class="navbar navbar-inverse bg-primary">
    <ul class="nav navbar-nav">
    <!-- <li><a href="#">Orders</a></li> -->
        <li>
            <a href="{{route('server-index')}}" class="text-dark btn ">
            Products
            </a>
        </li>
    </ul>
  <h4 class="navbar-text text-dark">Admin Panel</h4>
</nav>
<!-- <div class="container">
  <div class="text-right">
    <a href="{{route('server-create-products')}}" class="btn btn-dark ">New Product</a>
  </div>
</div> -->

<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-8">
        <div class="card mt-3">
            <h3 class="text-muted">Product Edit {{$product->name}}</h3>
            <form
                method="POST"
                action="/server/{{$product->id}}/update"
                enctype="multipart/form-data">
                @csrf {{--Encryption Token --}}
                @method('PUT')
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control"
                    value="{{old('name', $product->name)}}""
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
                    value="{{old('description', $product->description)}}"
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
                    value="{{old('price', $product->price)}}"
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

                <button type="submit" class="btn btn-primary m-2">Edit Done</button>

            </form>
        </div>
    </div>
  </div>

</div>


</body>
</html>
