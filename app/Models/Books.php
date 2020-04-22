<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable=['BookName','ISBN','Price','PageCount'];
}
