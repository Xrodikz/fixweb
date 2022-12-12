@extends('admin.home')
@section('content')
<div class="container text-center">
<div class="row">
  <div class="col-lg-10">
    <div class="pull-left">
        <h2>Upload Product</h2>
    </div>
    <div class="pull-right" style="margin-bottom:10px;">
    <a class="btn btn-success" href="{{ url('create') }}"> Create New Product</a>
    </div>
  </div>
</div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="card">
      <div class="card-body">
        <div class="shadow-lg">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Brand</th>
              <th scope="col">Foto</th>
              <th scope="col">Harga</th>
              <th scope="col">Detail</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($products as $product)            
              <tr>
                <th scope="row">{{ ++$i }}</th>
                <td>{{ $product->nama }}</td>
                <td>{{ $product->brand }}</td>
                <td><img src="/images/{{ $product->image }}" width="100px"></td>
                <td>{{ $product->harga }}</td>
                <td>{{ $product->detail }}</td>
                <td>
                  <form action="{{ route('destroy',$product->id) }}" method="POST">
        
                      <a class="btn btn-info" href="{{ route('show',$product->id) }}">Show</a>
         
                      <a class="btn btn-primary" href="{{ route('edit',$product->id) }}">Edit</a>
        
                      @csrf
                      @method('DELETE')
           
                      <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
              </td>
              </tr>
          </tbody>
          @endforeach
        </table>
      </div>
    </div>
  </div>
   
       {!! $products->links() !!}
</div>
@endsection