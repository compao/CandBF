<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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
class User  extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['compte_id', 'nom', 'prenom', 'telephone', 'date_naissances', 'name', 'email', 'password'];

   

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
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
