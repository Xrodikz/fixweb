@extends('layout.index')
@section('content')
<div class="container-fluid mt-3 col-10">
    <div class="shadow-lg rounded">
        <div class="row">
            <div class="col-lg-12 mt-2 mb-2">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header" style="background-color: #2d2d2d;">
                                <h5 class="card-title" style="color: white">Login</h5>
                                <hr class="text-warning mt-1" style="width: 1.5cm;">
                            </div>
                            <div class="card-body" style="background-color: #2d2d2d;">
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                <div class="row row-cols row-cols-md row-cols-xs col-lg-12">
                                        <div class="form-group col-lg-6">
                                            <aside class="text-white">Email</aside>
                                            <input class="form-control"  type="email" name="email" placeholder="E-mail" value="{{ old ('email') }}" autofocus />
                                        </div>
                                        <div class="from-group col-lg-6">
                                            <aside class="text-white">Password</aside>
                                            <input class="form-control"  type="password" name="password" placeholder="Password"/>
                                        </div>
                                </div>
                                <button class="mt-3 btn btn-primary btn-sm btnblock" type="submit">Login</button>
                                </form>
                                <a href="/reset-password" class="text-warning">Lupa Password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection