<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Component extends Model
{
	use Softdeletes;

    protected $fillable=['parent_id', 'name', 'url', 'icon'];
}
