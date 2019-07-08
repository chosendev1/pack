<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*factory(App\Models\Customer::class, 50)->create()->each(function ($u) {
        	$u->posts()->save(factory(App\Post::class)->make());
    	});*/

         factory(App\Models\Companies\Company::class, 1)->create();
        
    }
}
