<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps=false;

    protected $fillable=['video','estado','leccion_id'];

    public function leccion(){
        return $this->hasOne(Leccion::class);
    }

}
