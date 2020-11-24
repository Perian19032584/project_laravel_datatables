<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class balance_history extends Model
{
    protected $table = 'balance_history';

    public function user_data(){
        return $this->belongsTo('App\UsersData', 'id_user', 'id');
    }
}
