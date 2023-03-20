@extends("layouts.master")

@section("contenu")
<br><br><br><br><br><br>

<div class="container">
    <div class="row  justify-content-center">
        <div class="col-md-8">
            <div class="card hed_login contact_add">
                 @if(session()->has("success")) @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('contact.add') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name"  class="col-md-4 col-form-label text-md-end"><i class="zmdi zmdi-account material-icons-name"></i></label>

                            <div class="col-md-6">
                                <input id="name" placeholder="Nom" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input id="surname" placeholder="Prénom" type="text" class="form-control @error('name') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

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
                                <input id="email" placeholder="exemple@gmail.com" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="numero" class="col-md-4 col-form-label text-md-end">Numéro mobile </label>

                            <div class="col-md-6">
                                <input id="numero" placeholder="ex: 229 94769583 " type="number" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero') }}" required autocomplete="numero">

                                @error('numero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3 ">
                            <label for="Date_naiss" class="col-md-4 col-form-label text-md-end">Date de naissance</label>
                            <div class=" col-md-6">
                                <input type="date" name="date_naiss" id="date_naiss" class="form-control "  required>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Ajouter aux contacts
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
