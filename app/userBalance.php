<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userBalance extends Model
{
    protected $table = 'users_balance';


    public function usersBalance()
    {
        return $this->belongsTo('App\Users', 'telegram_id', 'telegram_id');
    }
}
