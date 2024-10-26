@extends('server.master')

@section('content')
<div class="text-center">

    <a href="{{route('server-index')}}" class="btn btn-primary ">Go Back</a>
  </div>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-8">
          <div class="card mt-3">
              <form method="POST" action="{{route('server-products-store')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" name="name" class="form-control"
                      value="{{old('name')}}"           
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

                  <button type="submit" class="btn btn-primary m-2">Create</button>

              </form>
          </div>
      </div>
    </div>

</div>

@endsection()
