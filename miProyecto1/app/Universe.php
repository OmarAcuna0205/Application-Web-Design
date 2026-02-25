<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_universe
 * @property string $universe
 * @property string $company
 * @property string $age
 * @property Character[] $characters
 */
class Universe extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_universe';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['universe', 'company', 'age'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function characters()
    {
        return $this->hasMany('App\Character', 'id_universe', 'id_universe');
    }
}
