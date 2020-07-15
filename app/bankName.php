<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bankName extends Model
{
    protected $table = 'bank_names';
    protected $primaryKey = 'id';
    protected $timestamp = true;
}
