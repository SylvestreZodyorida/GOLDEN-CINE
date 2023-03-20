@extends('layouts.app')

@section('content')
<br><br><br><br>
<div class="container">
    <div class="row  justify-content-center">
        <div class="col-md-4">
            <img class='signup_img' src="{{asset('img/Man Working With Laptop.jpg')}}" alt="">
        </div>
        <div class="col-md-6">
            <div class="card hed_login">
                <div class="card_header">Créer un compte 🔰</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end" for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <div class="col-md-6">
                                <input id="name" placeholder="Votre nom" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="surname"  class="col-md-4 col-form-label text-md-end"><i class="zmdi zmdi-account material-icons-name"></i></label>

                            <div class="col-md-6">
                                <input id="surname" placeholder="Votre prénom" type="text" class="form-control @error('name') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"><i class="zmdi zmdi-email"></i></label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Votre adresse e-mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end"><i class="zmdi zmdi-lock"></i></label>

                            <div class="col-md-6">
                                <input id="password" placeholder="mot de passe fort" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end"><i class="zmdi zmdi-lock-outline"></i></label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Confirmer le mot de passe" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Créer le compte') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
