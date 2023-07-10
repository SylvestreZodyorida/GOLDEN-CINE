@extends('layouts.app')

@section('content')
<section class="section formulaire" data-section="section3">
    <div class="" >
      <div class="hed_register">
            <center>
              <h2>Créez un compte !</h2><br><br>
            </center>
            <center>
                    <form class="container" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end" for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <div class="col-md-6">
                                <input id="name" placeholder="Votre nom" type="text" class="input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input id="surname" placeholder="Votre prénom" type="text" class="input form-control @error('name') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"><i class=" zmdi zmdi-email"></i></label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Votre adresse e-mail" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="age" class="col-md-4 col-form-label text-md-end"><i class=" zmdi zmdi-email"></i></label>

                            <div class="col-md-6">
                                <Select class="input form-control" name="age">
                                            <option value="">Selectionner votre tranche d'âge</option>
                                            <option  value="Moins_de_13_ans">Moins de 13 ans</option>
                                            <option  value="13_ans_-_18_ans">13 ans - 18 ans</option>
                                            <option  value="18_ans_et_plus">18 ans et plus</option>
                                        </Select>
                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sexe" class="col-md-4 col-form-label text-md-end"><i class=" zmdi zmdi-email"></i></label>

                            <div class="col-md-6">
                                <Select class="input form-control" name="sexe">
                                            <option value="">Selectionner votre sexe</option>
                                            <option  value="masculin">M</option>
                                            <option  value="feminin">F</option>
                                        </Select>
                                @error('sexe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end"><i class=" zmdi zmdi-lock"></i></label>

                            <div class="col-md-6">
                                <input id="password" placeholder="mot de passe fort" type="password" class="input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end"><i class=" zmdi zmdi-lock-outline"></i></label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Confirmer le mot de passe" type="password" class="input  form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Créer le compte') }}
                                </button>
                            </div>
                        </div><br><br>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{route('login')}}">Déjà un compte ? Connectez vous ici !</a>
                            </div>
                        </div>
                    </form>
            </center>
      </div>
    </div>
  </section>

@endsection
