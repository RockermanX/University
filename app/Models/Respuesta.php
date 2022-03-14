<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;

    protected $fillable =['definicion','is_valid','pregunta_id'];
    public function pregunta(){
        $this->hasOne(Pregunta::class);
    }
}
