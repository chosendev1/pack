<?php

use Illuminate\Database\Seeder;

class GuarantorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Customers\Guarantors::class, 50)->create();
    }
}
