<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tehsil extends Model
{
    protected $fillable=[
        'id','tname','district',
    ];
}
