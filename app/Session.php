<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = ['email'];
    public static $rules = ['email' => 'required|email'];
}
