<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $user_id
 * @property int $offre_id
 * @property string $date_enreg
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Offre $offre
 * @property User $user
 */
class Enregistrement extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['date_enreg', 'description'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function offre()
    {
        return $this->belongsTo('App\Offre');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
