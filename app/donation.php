<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donation extends Model
{
    protected $table = 'donations';
    protected $primaryKey = 'id';
    protected $timestamp = true;
}
