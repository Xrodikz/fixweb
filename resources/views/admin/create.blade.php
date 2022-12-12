@extends('admin.home')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('/') }}"> Back</a>
            </div>
        </div>
    </div>
          
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
     <div class="card">
        <div class="card-body" style="transf">
            <div class="shadow-lg">
                <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                     
                     <div class="row m-2 p-1">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name :</strong>
                                <input type="text" name="nama" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12">
                            <div class="form-group">
                                <strong>Brand :</strong>
                                <ul class="list-group" style="width: 5cm;">
                                    <li class="list-group-item">
                                      <input class="form-check-input me-1" type="radio" name="brand" value="Asus" checked>
                                      <label class="form-check-label" for="firstRadio">Asus</label>
                                    </li>
                                    <li class="list-group-item">
                                      <input class="form-check-input me-1" type="radio" name="brand" value="Lenovo">
                                      <label class="form-check-label" for="secondRadio">Lenovo</label>
                                    </li>
                                    <li class="list-group-item">
                                      <input class="form-check-input me-1" type="radio" name="brand" value="Samsung">
                                      <label class="form-check-label" style="width: 2cm;" for="thirdRadio">Samsung</label>
                                    </li>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="radio" name="brand" value="Acer">
                                        <label class="form-check-label" for="thirdRadio">Acer</label>
                                      </li>
                                  </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Detail:</strong>
                                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Image:</strong>
                                <input type="file" name="image" class="form-control" placeholder="image">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name :</strong>
                                <input type="text" name="harga" class="form-control" value="Rp. "placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                      
                </form>

            </div>
        </div>
     </div>
</div>
@endsection