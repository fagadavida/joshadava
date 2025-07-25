<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    protected $fillable = ['fullname', 'email', 'phone', 'company', 'message'];
}
