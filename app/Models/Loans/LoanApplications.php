<?php

namespace App\Models\Loans;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Payments\Payments;
use App\Models\Customers\Customers;
use App\Models\Customers\Guarantors;
use App\Models\Collaterals\Collaterals;

class LoanApplications extends Model
{
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];
    protected $guarded = [];

    //protected $with = ['LoanProduct.loan_application'];
        
    public function customers()
    {      
        return $this->belongsTo(Customers::class);
    }

    public function loan_products()
    {
        return $this->belongsTo(LoanProducts::class,'loan_products_id');
    }

    public function guarantors()
    {
        return $this->hasMany(Guarantors::class);
    }

    public function collaterals()
    {
        return $this->hasMany(Collaterals::class);
    }

    public function payments()
    {   
        return $this->hasMany(Payments::class);
    }

    public function approve($loan_id)
    {
        $this->loan_id;
        return;
    }

    public function disburse($loan_id)
    {}

    public function reverse($loan_id)
    {}

    public function reject($loan_id)
    {}

    public function loan_attributes($loan_id)
    {
        
    }
}
