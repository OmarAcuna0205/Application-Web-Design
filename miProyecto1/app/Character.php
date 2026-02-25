<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_character
 * @property int $id_universe
 * @property string $name
 * @property string $real_name
 * @property string $gender
 * @property Universe $universe
 */
class Character extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_character';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['id_universe', 'name', 'real_name', 'gender'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function universe()
    {
        return $this->belongsTo('App\Universe', 'id_universe', 'id_universe');
    }
}
