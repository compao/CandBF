<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $compte_id
 * @property string $nom
 * @property string $prenom
 * @property string $telephone
 * @property string $date_naissances
 * @property string $name
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property Compte $compte
 * @property Enregistrement $enregistrement
 */
class User extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['compte_id', 'nom', 'prenom', 'telephone', 'date_naissances', 'name', 'email', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function compte()
    {
        return $this->belongsTo('App\Compte');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function enregistrement()
    {
        return $this->hasOne('App\Enregistrement', 'user_id');
    }
}
