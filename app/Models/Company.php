<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
   use SoftDeletes;

   protected $fillable=['nid_type', 'nid', 'business_name', 'tradename', 'phone', 'address', 'email'];

}
