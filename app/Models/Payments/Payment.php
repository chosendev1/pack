<?php

namespace App\Models\Loans;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function Payment()
    {
        return $this->belongsTo(LoanApplication::class, 'loan_product_id');
    }
}
