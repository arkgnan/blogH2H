<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'log_h2h';
    protected $guarded = [];
    public $timestamps = false;
}
