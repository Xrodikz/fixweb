@extends('layout.index')
@section('content')
<style>
  .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
    
}
</style>
<div class="container mt-3 md-2">
    <div class="row">
                @foreach ($products as $product)                    
                <div class="col col-md-3 mt-3">
                    <div class="card" style="width: 16rem;">
                        <img src="/images/{{ $product->image }}" class="card-img-top">
                        <div class="card-body">
                          <h5 class="card-title">{{ $product->nama }}</h5>
                          <p class="card-text">{{ $product->harga }}</p>
                        </div>
                      </div>
                </div>
                @endforeach
    </div>
</div>
@endsection