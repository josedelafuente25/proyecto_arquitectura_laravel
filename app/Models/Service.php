<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'type_service', 'description', 'phone', 'state'
    ];
    public $timestamps = false;

}
