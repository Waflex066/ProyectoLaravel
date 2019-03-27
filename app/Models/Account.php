<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable=['nid_type', 'nid', 'name', 'last_name', 'birthdate'];
}
