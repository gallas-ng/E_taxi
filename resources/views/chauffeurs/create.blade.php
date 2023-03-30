@extends('layouts.app')

@section('content')
<style>

.presentation-img img{
        animation: bounce 1s infinite;
        width: 100%;
        max-width: 400px;
        margin:auto;
        border-radius: 6px;
    }
    
    @keyframes bounce {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-15px);
    }
    100% {
        transform: translateY(0);
    }
    }
</style>
<div class="container" >
    <div class="row justify-content-center" style="margin-bottom: 20px;">
    <div class="text text-center" style="font-size: Large;" > ! Le Plaisir de Conduire. </div> 

        <div class="col-md-14 mb-4">
        <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="presentation-img">
                        <img src="https://img.freepik.com/free-vector/good-taxi-neon-sign_1262-15565.jpg?w=740&t=st=1680135614~exp=1680136214~hmac=bc2e140b9bb2b7eb1ebea4c29d65b22b3d3065a6953797be1866aa55cdc13d64" alt="Image de chauffeur">
                        </div>
                    </div>
                    <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background-color: rgba(1, 4, 136, 0.9);color:white;">Compte Chauffeur</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('chauffeurs.store') }}">
                        @csrf
                        
                            <div class="row mb-2">
                                <label for="nom" class="col-md-4 col-form-label text-md-end">Nom</label>
                                
                                <div class="col-md-6">
                                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                                    @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="prenom" class="col-md-4 col-form-label text-md-end">Prenom</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="adresse" class="col-md-4 col-form-label text-md-end">Adresse</label>

                            <div class="col-md-6">
                                <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse">

                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-2">
                            <label for="tel" class="col-md-4 col-form-label text-md-end">Telephone</label>

                            <div class="col-md-6">
                                <input id="tel" type="text" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel">

                                @error('tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
						<div class="row mb-2">
                            <label for="date_naissance" class="col-md-4 col-form-label text-md-end">Date de Naissance</label>

                            <div class="col-md-6">
                                <input id="date_naissance" type="date" class="form-control @error('date_naissance') is-invalid @enderror" name="date_naissance" value="{{ old('date_naissance') }}" required autocomplete="date_naissance">

                                @error('date_naissance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

						<div class="row mb-2">
                            <label for="num_permis" class="col-md-4 col-form-label text-md-end">Numero Permis</label>

                            <div class="col-md-6">
                                <input id="num_permis" type="number" class="form-control @error('num_permis') is-invalid @enderror" name="num_permis" value="{{ old('num_permis') }}" required autocomplete="num_permis">

                                @error('num_permis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

						<div class="row mb-2">
							<label for="vehicule" class="col-md-4 col-form-label text-md-end">Véhicule</label>

							<div class="col-md-6">
								<select id="vehicule" class="form-select @error('vehicule') is-invalid @enderror" name="vehicule" required>
									<option value="">Choisir...</option>
									@foreach($vehicules as $id => $marque)
										<option value="{{ $id }}" {{ old('vehicule') == $id ? 'selected' : '' }}>{{ $marque }}</option>
									@endforeach
								</select>

								@error('vehicule')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

                        <div class="row mb-2">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: #1acc8d;">
                                    S'inscrire
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                    </div>
        </div>
        </div>
    </div>
</div>
@endsection
