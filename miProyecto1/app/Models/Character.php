<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $table = 'characters';
    // Indicamos su llave primaria personalizada
    protected $primaryKey = 'id_character';

    protected $fillable = ['id_character', 'name', 'real_name', 'gender', 'id_universe'];

    public function universe()
    {
        // El segundo parámetro es la llave foránea y el tercero es la llave local en 'universes'
        return $this->belongsTo(Universe::class, 'id_universe', 'id_universe');
    }
}