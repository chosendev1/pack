<?php

use Illuminate\Database\Seeder;

class BranchesTableSeeder extends Seeder
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

         factory(App\Models\Branches\Branch::class,4)->create();
        
    }
}
