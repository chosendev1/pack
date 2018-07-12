<?php

use Illuminate\Database\Seeder;

class LoanProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Loans\LoanProduct::class, 2)->create();
    }
}
