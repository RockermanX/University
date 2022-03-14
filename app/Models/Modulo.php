<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modulo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=['modulo','estado','orden'];
    public $timestamps=false;

 public function leccion(){
    return $this->hasMany(Leccion::class);

 }
 
 public function examen(){
    return $this->hasOne(Examen::class);
 }



}
