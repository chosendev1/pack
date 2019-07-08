<?php

namespace App\Models\Loans;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoanProducts extends Model
{
	use SoftDeletes;
    
    protected $dates = ['deleted_at'];
    protected $guarded = []; 

   	public function loan_application()
    {   
   		return $this->hasMany(LoanApplications::class);
    }

    /*public function getInterestMethod()
    {  

    	//return $this->product_name;
    	$p=new LoanProducts;
    	return $p->pluck('product_name');
    }*/
}
