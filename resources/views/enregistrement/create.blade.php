@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
		<div class="col-12">
			<marquee>
                <h1>Bienvenu sur la plateforme officielle de la jeunesse!!!!!!!!!</h1>
            </marquee>
		</div>
	</div>

    <div class="row">
		<div class="offset-3 col-6" style="background-color:white; border-radius:5px; padding:50px;">
			<form action="action.php" method="POST">		
			
				<div class="row">
					<div class="col-12" style="text-align:center;">
						<h2><u>Formulaire d'inscription</u></h2>
					</div>
				</div><hr/>
				
				<div class="row">
					<div class="col-12 form-unit" style="">
						<label for="nom" class="form-label">Nom:</label>
						<input class="form-control" id="nom" type="text" name="nom" required minlength="2" maxlength="50" placeholder="Nom" onkeyUp="validation(this);">
					</div>
					<div class="col-12 form-unit" style="">
						<label for="prenom" class="form-label">Prénom:</label>
						<input class="form-control" id="prenom" type="text" name="prenom" required minlength="2" maxlength="50" placeholder="Prénom" onkeyUp="validation(this);">
					</div>
					<div class="col-12 form-unit" style="">
						<label form="email" class="form-label">Email:</label>
						<input class="form-control" id="email" type="email" name="email"  required placeholder="exemple@gmail.com" >
						
					</div>
					<div class="col-12 form-unit" style="">
						<label form="niveau_etude" class="form-label">Niveau d'étude:</label>
						<select name="Niveau detude" class="form-control">
						   <option value ='Choisir'> Choisir</option>
						   <option value ='Illettré'> Illettré</option>
						   <option value ='lettré'> lettré</option>
						   <option value ='Primaire inachevé'> Primaire inachevé</option>
						   <option value ='Primaire achevé'> Primaire achevé</option>
						   <option value ='Sécondaire/1er cycle  inachevé'> Sécondaire/1er cycle inachevé</option>
						   <option value ='Sécondaire/2nd cycle achevé'> Sécondaire/2nd cycle achevé</option>
						   <option value ='Superieure inachevé'> Superieur inachevé</option>
						   <option value ='Superieure achevé'> Superieur achevé</option>
						   <option value ='Licence inachevée'> Licence inachevée</option>
						   <option value ='Licence achevée'> Licence achevée</option>
						   <option value ='Master inachevé'> Master inachevé</option>
						   <option value ='Master achevé'> Master achevé</option>
						   <option value ='Doctorat inachevé'> Doctorat inachevé</option>
						   <option value ='Doctorat achevé'> Doctorat achevé</option>
						   <option value ='Professorat inachevé'>Professorat inachevé</option>
						   <option value ='Professorat achevé'>Professorat achevé</option>
						</select>
					</div>
					<div class="col-12 form-unit" style="">
						<label for="ville" class="form-label">Ville:</label>
						<select name="ville" id ="ville" class="form-control">
						   <option value ='Choisir'> Choisir</option>
						   @foreach($villes as $v)
						   <option value ='{{ $v->nom_ville }}'> {{ $v->nom_ville }}</option>
						   @endforeach
						</select>
					</div>
					<div class="col-12 form-unit" style="">
						<label for="tel" class="form-label">Telephone:</label>
						<input class="form-control" id="tel" type="text" name="tele" required minlength="2" maxlength="50" placeholder="Telephone" onkeyUp="validation(this);">
					</div>
					<div class="col-12 form-unit" style="">
						<label for="photo" class="form-label">Photo:</label>
						<input type="file" name="photo" accept="image/*"  required="required" id="photo" class="form-control">
					</div>
					<div class="col-12 form-unit" style="">
						<label for="cv" class="form-label">Curriculum Vitae:</label>
						<input type="file" name="cv" accept="text/pdf"  required="required" id="cv" class="form-control">
					</div>
					<div class="col-12 form-unit" style="">
						<label for="lettre_de_motivation" class="form-label">Lettre de motivation:</label>
						<input type="file" name="lettre_de_motivation" accept="text/pdf"  required id="lettre_de_motivation" class="form-control">
					</div>
					<div class="col-12 form-unit" id="receptFile" style="">
						<label for="diplome" class="form-label">Diplomes:</label>
						<div class="input-group">
							<input type="file" name="diplome" accept="text/pdf"  required id="diplome" class="form-control"><hr/>
						</div>
					</div>
					<div class="offset-1 col-10" id="clickMe" style="font-size:0.8em;background-color:rgb(222,222,242);text-align:center;color:green;cursor:pointer;margin-top:-15px;">Ajouter un diplome supplementaire</div>
					
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