<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signals extends Model
{

    protected $table = 'signals';
    const CREATED_AT = null;
    protected $fillable = ['pair', 'created_at', 'updated_at', 'target_1', 'target_2', 'target_3', 'buy', 'source', 'status', 'direction', 'signal_id',
        'risk_filter', 'term', 'failed_at', 'profit', 'work_time','target_1_time','target_2_time','target_3_time','buy_time','stop_loss','stop_loss_time'];


    //$chart_data = Signals::all();
//    foreach ($chart_data as $rewriting_createdAt){
//        $d = $rewriting_createdAt->created_at = $rewriting_createdAt->freshTimestamp();
//        $d->save();
//    }

}

