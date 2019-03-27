<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyContact extends Model
{
    protected $fillable=['id'. 'company_id', 'from_email', 'from_name', 'message', 'status'];
}
