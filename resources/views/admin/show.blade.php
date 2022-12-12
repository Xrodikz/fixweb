@extends('admin.home')
@section('content')
<div class="container">

    <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2> Show Product</h2>
          </div>
          <div class="pull-right">
              <a class="btn btn-primary" href="{{ url('/input') }}"> Back</a>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Name:</strong>
              {{ $product->nama }}
          </div>
      </div>

      <div class="card">
        <div class="card-body m-2 p-2">
            <div class="shadow-lg">

                <div class="col-xs-12 col-sm-12 col-md-12 m-2">
                    <div class="form-group">
                        <strong>Details:</strong>
                        {{ $product->detail }}
                        <hr>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 m-2">
                    <div class="form-group">
                        <strong>Image:</strong>
                        <hr>
                        <img src="/images/{{ $product->image }}" width="100px">
                    </div>
                </div>
            </div>
        </div>
      </div>

</div>

</div>
@endsection