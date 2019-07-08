<?php

namespace App\Models\Collaterals;

use Illuminate\Database\Eloquent\Model;
use App\Models\Loans\LoanApplications;

class Collaterals extends Model
{
    protected $guarded = [];


    public function loan_application()
    {      
        return $this->belongsTo(LoanApplications::class);
    }
}
