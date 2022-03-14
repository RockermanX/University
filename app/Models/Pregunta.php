<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pregunta extends Model
{
    use HasFactory;
    use SoftDeletes;
public $timestamps=false;

protected $fillable=['descripcion','examen_id'];

public function leccion(){
 return   $this->hasOne(Leccion::class);
}
public function respuesta(){

 return $this->hasMany(Respuesta::class);
}
}
