<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriptions extends Model
{
    protected $table = 'subscriptions';
    protected $fillable = [
        'telegram_id', 'subscription_name', 'expired_at', 'active'
    ];
    public function user()
    {
        return $this->belongsTo('App\User', 'telegram_id','telegram_id');
    }
}
