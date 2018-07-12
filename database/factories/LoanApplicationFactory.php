<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'customer_id'     => function () {
            return factory(App\Models\Customers\customer::class)->create()->id;
        },
        'loan_product_id'     => function () {
            return factory(App\Models\Loans\LoanProduct::class)->create()->id;
        },
        'loan_product_id' => $faker->name,
        'amount' 		  => $faker->numberBetween(200000,1000000),
        'period' 		  => $faker->numberBetween(2,10),
        'date' 			  => $faker->date('Y-m-d','now')
        
    ];
});
