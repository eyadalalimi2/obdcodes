<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['key', 'value', 'type'];

    public $timestamps = true;

    public $incrementing = true;

    public $primaryKey = 'id';
}
