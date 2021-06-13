<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DirectReferral extends Model
{
    //

    protected $guarded = [];

    public function referrees()
    {
        return $this->belongsTo('App\User', 'referree_id', 'id');
    }

    public function referrers()
    {
        return $this->belongsTo('App\User', 'referrer_id', 'id');
    }


}
