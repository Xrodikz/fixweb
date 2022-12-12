@extends('layout.index')
@section('content')
<div class="container col-md-10">
    <div class="shadow-lg rounded">
        <div class="row">
            <div class="col-lg-12 mt-2 mb-2">
                <div class="row">
                    <div class="col">
                        <div class="card mt-3p">
                            <div class="card-header" style="background-color: #2d2d2d;">
                                <h5 class="card-title" style="color: white">Daftar</h5>
                                <hr class="text-warning mt-1" style="width: 1.5cm;">
                        </div>
                        <div class="card-body" style="background-color: #2d2d2d;">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                            <div class="row row-cols row-cols-md">
                                <div class="from-group col-lg-12">
                                    <label for="name" class="col-md-4 col-form-label text-ml-end" style="color: white">{{ __('Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nama Lengkap" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="from-group col-lg-12">
                                    <label for="email" class="col-md-4 col-form-label text-ml-end" style="color: white">{{ __('E-mail') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                    <div class="from-group col-lg-6">
                                        <label for="password" class="col-md-4 col-form-label text-ml-end" style="color: white">{{ __('Password') }}</label>
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="from-group col-lg-6">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-ml-end" style="color: white">{{ __('Confirm Password') }}</label>
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Konfirmasi" required autocomplete="new-password">
                                        </div>
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
@endsection

