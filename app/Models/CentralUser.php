<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentralUser extends Model
{
    use HasFactory;

    protected $connection = 'mysql_central';

    protected $table = 'users';


    public function spadre(){
        return $this->where('id_users',$this->padre)->first();
    }


}
