<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}" defer></script>

		<!-- Fonts -->
		<link rel="dns-prefetch" href="//fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

		<!-- Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
			.form-unit
			{
				margin-bottom:25px; 
			}
        </style>
    </head>
<body>
<background-image src="url(C:\ODC\2.png);background-repeat:no-repeat;background-size:100%;">
	<div clas='logo'>
	   
	</div>
	<div class="row rowNav" style="">
			<div class="col-6">
			    <ul>
					<li><a href="#"><b><u>Accueil5</u></b></a></li>
					<li><a href="#"><b><u>contacts</u></b></a></li>
					<li><a href="#"><b><u>A propos</u></b></a></li>
				</ul>
			</div>
			<div class="col-6">
				<form method="POST" action="{{ route('login') }}">
							@csrf
					<input type="email" class="form-controls" name="email" placeholder="Identifiant"/>
					<input type="password" class="form-controls" name="password" placeholder="Mot de passe"/>
					<button class="btn btn-success btn-sm" type="submit">Connection</button><br/>
				</form>
				<marquee style="color:orange;">Vous n'avez pas de compte? Inscrivez vous.</marquee>
				
			</div>
	</div>

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
	
	

	<style>
	.form-unit
	{
		margin-bottom:25px;
	}		
	</style>
</body>
</html>
