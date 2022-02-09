@extends('layouts.app')

@section('content')
	<div class="container">

		<br/>
		<div class="row">
			<div class="col-12 col-sm-7" style="padding:20px;border:1px solid rgb(244,244,244);">
				<div class="row">
					<div class="col-4">
						<img src="odc.jpg" class="img img-fluid" style="display:none;"/>
					</div>
					<div class="col-16">
						<h2 style="font-weight:bold;">POSTULER EN TOUTE SECURITE ET EN TOUTE SIMPLICITE AVEC CANDBF<hr/> </h2>
						CANDBF est un site web qui vous permet de voir tous les offres de récrutement, d'y postuler et de gérer vos candidatures en toute sécurité.
							CANDBF c'est aussi la possibilité de faire passer vos offres d'emplois.
					</div>
				</div><br/><br/><br/><br/><br/><hr/>
				<div class="row">
					<div class="col-4"style="font-size : 1.3em;"> Nos partenaires : </div>
					<div class="col-2">
						<a href="https://www.orangedigitalcenters.com/country/BF/home"><img src="odc.jpg" class="img img-fluid" style="height:51px;"/></a>
					</div>
					<div class="col-2">
						<a href="https://www.essitechgroup.com/"><img src="essitech.jpg" class="img img-fluid"  style="height:71px;margin-top:-10px;"/></a>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-5" style="background-color:rgb(244,244,244); border-radius:5px; padding:50px;">
				<form method="POST" action="{{ route('register') }}">
                        @csrf
					<div class="row">
						<div class="col-12" style="text-align:center;">
							<h2><u>Inscription</u></h2>
						</div>
					</div><hr/>
					
					<div class="row">
						<div class="col-12 form-unit" style="">
							<label for="identifiant" class="form-label">Identifiant:</label>
							<input class="form-control" id="identifiant" type="text" name="name" required minlength="2" maxlength="50" placeholder="ID" onkeyUp="validation(this);">
							@error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
						</div>
						<div class="col-12 form-unit" style="">
							<label for="nom" class="form-label">Nom:</label>
							<input class="form-control" id="nom" type="text" name="nom" required minlength="2" maxlength="50" placeholder="Nom" onkeyUp="validation(this);">
							@error('nom')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="col-12 form-unit" style="">
							<label for="prenom" class="form-label">Prénom:</label>
							<input class="form-control" id="prenom" type="text" name="prenom" required minlength="2" maxlength="50" placeholder="Prénom" onkeyUp="validation(this);">
							@error('prenom')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="col-12 form-unit" style="">
							<label form="email" class="form-label">Email:</label>
							<input class="form-control" id="email" type="email" name="email"  required placeholder="exemple@gmail.com" >
							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="col-12 form-unit" style="">
							<label for="pass" class="form-label">Mot de passe:</label>
							<input class="form-control" id="pass" type="password" name="password" required minlength="2" maxlength="50" placeholder="Mot de Passe" onkeyUp="validation(this);">
							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="col-12 form-unit">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
						<div class="row form-unit" id="" style="margin-top:25px;">
							<button class="btn btn-danger col-4" style="margin-right:5px;" type="reset">Annuler</button>
							<button class="btn btn-success col-4" type="submit" id='envoyer'>Envoi</button>				
						 </div>
					</div>

					
				</form>
			</div>
		</div>

	</div>
	@endsection
