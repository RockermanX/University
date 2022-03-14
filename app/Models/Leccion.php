<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Leccion extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=['leccion','estado','modulo_id','orden'];


    public function modulo(){
        return $this->hasOne(Modulo::class);
    }

    public function video(){
        return $this->hasOne(Video::class);
    }

    public function pregunta(){
        return $this->hasMany(Pregunta::class);
    }

 }
