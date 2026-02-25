<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universe extends Model
{
    use HasFactory;

    protected $table = 'universes';
    // Indicamos que la llave primaria no se llama 'id'
    protected $primaryKey = 'id_universe'; 

    protected $fillable = ['id_universe', 'universe', 'company', 'age'];

    public function characters()
    {
        return $this->hasMany(Character::class, 'id_universe');
    }
}