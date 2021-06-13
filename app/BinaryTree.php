<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class BinaryTree extends Model
{
    //

    use NodeTrait;

    protected $fillable = [
        'user_code', 'legs', 'status', 'pack_name', 'pack_id', '_lft', '_rgt', 'position', 'user_id', 'parent_id',
    ];

   

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }


    public function packs()
    {
        return $this->belongsTo('App\MindigoPack', 'pack_id');
    }
}
