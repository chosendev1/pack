<?php

namespace App\Models\Loans;

use Illuminate\Database\Eloquent\Model;
use App\Models\Loans\LoanProduct;
use Carbon\Carbon;

class Schedule extends Model
{
    
    
    //protected $dates = ['deleted_at'];
    //protected $guarded = [];
     public $interest_method;
     private $interest_rate;
     public $penalty_rate;
     public $grace_period;
     public $frequency;
     public $loan_period;
     public $installment;
     public $principal;
     public $interest;
     public $balance;
     public $payment_date;
     public $disbursement_date;
     public $p;
     public $r;
     public $n;
     public $i;
     public  $schedule = [];
     private $payment = [];
     private $loan_id;
     private $interestmethod;
     public  $collection;
     public  $installment_number;

     /*public function __construct($interest_method,
                                 $interest_rate,
                                 $penalty_rate,
                                 $grace_period,
                                 $frequency,
                                 $loan_period,
                                 $amount,
                                 $disbursement_date
                                )
     {
            $this->interest_method = $this->interest_method();
            $this->interest_rate   = $this->interest_rate();
            $this->penalty_rate    = $this->penalty_rate();
            $this->grace_period    = $grace_period;
            $this->frequency       = $frequency;
            $this->loan_period     = $loan_period;
            $this->amount           = $amount;
            $this->balance          = $amount;
            $this->disbursement_date = $disbursement_date;
            $this->principal        = 0;
            $this->n                = $loan_period;
            $this->r                = $interest_rate;
            $this->p                = $amount;
            
     }*/

    public function __construct(LoanApplications $loan)
    {  
            /*$this->loan_id = $loan->id;
            dd($this->loan_id);*/

            $this->interest_method = $this->getInterestMethod($loan->id);
            $this->interest_rate   = $this->getInterestRate($loan->id)/100;
            $this->penalty_rate    = $this->getPenaltyRate($loan->id);
            $this->grace_period    = $this->getGracePeriod($loan->id);
            $this->frequency       = $this->getFrequency($loan->id);
            $this->loan_period     = $loan->period;
            $this->amount            = $loan->amount;
            $this->balance           = $loan->amount;
            $this->disbursement_date = $loan->date;
            $this->installment_number = 0;
            $this->principal         = 0;
            $this->n                 = $this->loan_period;
            $this->r                 = $this->interest_rate;
            $this->p                 = $this->amount;
            
           
            /*"id" => 1
            "customers_id" => 51
            "loan_products_id" => 3
            "amount" => 287815
            "period" => 2
            "date" => "2001-02-18"
            "approved" => 0
            "disbursed" => 0
            "rejected" => 0
            "created_at" => "2018-07-21 12:34:57"
            "updated_at" => "2018-07-21 12:34:57"
            "deleted_at" => null*/
            
    } 

      public function testing()
     {
        dd($this->loan);
     }

     public function flat()
     {  
        /*if($int_type=='Fixed'){ 
           $totalInterest=($amount*$rate);       
           $interest=($amount*$rate)/$newPeriod;           
           }else{*/
        $this->interest=$this->amount*$this->interest_rate;
        //$totalInterest=($amount*$rate*$newPeriod);
        $this->principal=$this->amount/$this->loan_period;
        $this->installment=$this->principal+$this->interest;
        //$this->balance=$this->balance-$this->principal;

        for($this->i=1; $this->i<=$this->loan_period; $this->i++){
       
            $this->payment_date = 
                $this->getPaymentDates($this->disbursement_date,$this->frequency);

            $this->payment_date = new Carbon($this->payment_date);

            $this->payment=[
                'installment_number' => $this->i,
                'payment_date' => $this->payment_date->format('d-m-Y'),
                'principal'    => $this->principal,
                'interest'     => $this->interest,
                'installment'  => $this->installment
            ];

            array_push($this->schedule, $this->payment);

        }
           $this->collection=collect($this->schedule);
            return $this->collection;
    }

    public function decliningBalanceDiscounted()
    {
        
        $this->principal=$this->amount/$this->loan_period;
        // $principal=(ceil($principal/100))*100;           

        for($this->i=1; $this->i<=$this->loan_period; $this->i++){
        
            $this->interest=$this->balance*$this->interest_rate;
            //$this->interest=(ceil($this->interest/100))*100;
            $this->installment=$this->principal+$this->interest;                         
            $this->balance=$this->balance-$this->principal;
            //$totalInstallments+=$installment;

            $this->payment_date = 
                $this->getPaymentDates($this->disbursement_date,$this->frequency);

            $this->disbursement_date = $this->payment_date;
            $this->payment_date = new Carbon($this->payment_date);

            $this->payment=[
                'installment_number' => $this->i,
                'payment_date' => $this->payment_date->format('d-m-Y'),
                'principal'    => $this->principal,
                'interest'     => $this->interest,
                'installment'  => $this->installment
            ];

            array_push($this->schedule, $this->payment);

        }
           $this->collection=collect($this->schedule);
            return $this->collection;
    }

     public function decliningBalanceArmotised()
     {
    
        for($this->i=1; $this->i<=$this->loan_period; $this->i++){
            $this->installment=(($this->p*$this->r)
            *pow((1+$this->r),$this->n))/
            (pow((1+$this->r),$this->n)-1);

            $this->interest=$this->balance*$this->interest_rate;
            //$this->interest=(ceil($this->interest/100))*100;                
            $this->principal=$this->installment-$this->interest;          
            $this->balance=$this->balance-$this->principal;

            $this->payment_date = 
                $this->getPaymentDates($this->disbursement_date,$this->frequency);

            $this->disbursement_date = $this->payment_date;

            $this->payment_date = new Carbon($this->payment_date);

            $this->payment=[
                'installment_number' => $this->i,
                'payment_date' => $this->payment_date->format('d-m-Y'),
                'principal'    => $this->principal,
                'interest'     => $this->interest,
                'installment'  => $this->installment
            ];

            array_push($this->schedule, $this->payment);

        }
           $this->collection=collect($this->schedule);
            return $this->collection;
     }
    
     public function getPaymentDates($disbursement_date,$frequency)
     {  

           if($frequency == 'monthly')
           $this->payment_date = date('Y-m-d', strtotime('+1 month', strtotime($disbursement_date)));
           elseif($this->frequency == 'weekly')
           $this->payment_date = date('Y-m-d', strtotime('+1 week', strtotime($disbursement_date)));
           elseif($this->frequency == 'biweekly')
           $this->payment_date = date('Y-m-d', strtotime('+2 week', strtotime($disbursement_date)));
           elseif($this->frequency == 'quarterly')
           $this->payment_date = date('Y-m-d', strtotime('+3 month', strtotime($disbursement_date)));
            return $this->payment_date;
     }

     private function pmt($interest_rate, $repayment_period, $disbursed_amount)
    {
        $amount   = $interest_rate * - $disbursed_amount * pow((1 + $interest_rate), $repayment_period) / (1 - pow((1 + $interest_rate), $repayment_period));
        return $amount;
    }

   // https://www.vertex42.com/ExcelArticles/amortization-calculation.html)

    public function getFrequency($product_id)
    {  
        // add frequency field on products table
        //$this->frequency = LoanProduct::find($product_id);
        //return $this->frequency->payment_frequency;
        return 'monthly';
    }

    public function getInterestRate($product_id)
    {
        $this->interest_rate = LoanProducts::find($product_id);
        return $this->interest_rate->interest_rate;
    }

    public function getInterestMethod($product_id)
    {
        $this->interest_method = LoanProducts::find($product_id);
        return $this->interest_method->interest_method;
    }

    public function getPenaltyRate($product_id)
    {
        $this->penalty_rate = LoanProducts::find($product_id);
        return $this->penalty_rate->penalty_rate;
    }

    public function getGracePeriod($product_id)
    {
        $this->grace_period = LoanProducts::find($product_id);
        return $this->grace_period->grace_period;
    }

    public function customer()
    {      
        return $this->belongsTo(Customers::class);
    }

    public function loan_product()
    {
        return $this->belongsTo(LoanProducts::class);
    }

    public function payment()
    {   
        return $this->hasMany(Payments::class);
    }

    public function approve($loan_id)
    {
        $this->loan_id;
        return;
    }

    public function disburse($loan_id)
    {
        
    }

    public function reverse($loan_id)
    {}

    public function reject($loan_id)
    {}

    public function loan_attributes($loan_id)
    {
        
    }
}
