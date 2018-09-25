<?php

use Illuminate\Database\Seeder;

class LoanApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Loans\LoanApplications::class, 18)->create();
       /* factory(App\Models\Loans\LoanProducts::class, 5)->create()->each(function ($u) {
        	$u->loan_application()->save(factory(App\Models\Loans\LoanApplications::class)->make());
    	});//*/
    }
}
