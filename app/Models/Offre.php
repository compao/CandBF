<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $compte_id
 * @property int $ville_id
 * @property string $nom_offre
 * @property string $contact_entreprise
 * @property string $date_debut
 * @property string $date_fin
 * @property string $type
 * @property string $nom_entreprise
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Compte $compte
 * @property Ville $ville
 * @property Enregistrement[] $enregistrements
 */
class Offre extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['compte_id', 'ville_id', 'nom_offre', 'contact_entreprise', 'date_debut', 'date_fin', 'type', 'nom_entreprise'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function compte()
    {
        return $this->belongsTo('App\Compte');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ville()
    {
        return $this->belongsTo('App\Ville');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enregistrements()
    {
        return $this->hasMany('App\Enregistrement');
    }
}
