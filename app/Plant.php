<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'plant_id';
    protected $fillable = ['name'];
}
