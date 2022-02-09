
<div class="card" style="width: 18rem;">
<h5 class="card-header">{{ $o->nom_offre }}</h5>
  <div class="card-body">
    <h6 class="card-subtitle mb-2 text-muted">Nom de l'entreprise: {{ $o->nom_entreprise }}</h6>
    <p class="card-text">
      Date de Debut:{{ $o->date_debut }} <br>
      Date de Fin:{{ $o->date_fin }}<br>
      Type:{{ $o->type }}<br>
      Contact:{{ $o->contact_entreprise }}
    </p>
    <a href="#" class="card-link btn btn-primary" data-toggle="tooltip" data-placement>Postuler</a>
  </div>
</div>
