<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bom_recruitment extends Model
{
    protected $table = 'bom_recruitments';
    protected $primaryKey = 'id';
    protected $timestamp = true;

    // public function user()
    // {
    //     return $this->belongsTo('App\User');
    // }
}
