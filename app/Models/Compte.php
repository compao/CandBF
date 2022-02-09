<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $login
 * @property string $mot_de_passe
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Offre[] $offres
 * @property User[] $users
 */
class Compte extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['login', 'mot_de_passe'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function offres()
    {
        return $this->hasMany('App\Offre');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
