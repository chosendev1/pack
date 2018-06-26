<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Customer extends Model
{
	use SoftDeletes;
	
	protected $dates = ['deleted_at'];
	protected $guarded = [];
   
    public function loan_application()
    {   
   		return $this->hasMany(LoanApplication::class);
    }
}

