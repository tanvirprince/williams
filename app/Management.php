<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    protected $fillable = ['name', 'designation', 'editor1', 'image'];
}
