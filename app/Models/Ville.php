<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nom_ville
 * @property string $description_ville
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Offre[] $offres
 */
class Ville extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nom_ville', 'description_ville'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function offres()
    {
        return $this->hasMany('App\Offre');
    }
}
