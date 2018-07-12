<?php

namespace App\Models\Loans;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoanProduct extends Model
{
	use SoftDeletes;
    
    protected $dates = ['deleted_at'];
    protected $guarded = []; 

   	public function loan_application()
    {   
   		return $this->hasMany(LoanApplication::class);
    }
}
