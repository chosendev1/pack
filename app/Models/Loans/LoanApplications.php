<?php

namespace App\Models\Loans;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


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

    public function loan_product()
    {
        return $this->belongsTo(LoanProducts::class,'loan_products_id');
    }

    public function payment()
    {   
        return $this->hasMany(Payment::class);
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
