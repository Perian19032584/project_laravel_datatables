<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersData extends Model{

    protected $table = 'users_data';

    public function balance_history(){
        return $this->hasMany('App\balance_history', 'id_user', 'id');
    }

}
