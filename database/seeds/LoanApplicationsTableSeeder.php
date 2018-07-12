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
        factory(App\Models\Loans\LoanApplication::class, 5)->create();
    }
}
