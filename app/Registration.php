<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'registrations';
    protected $primaryKey = 'registration_id';
    protected $timestamp = true;
}
