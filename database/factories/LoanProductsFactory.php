<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Loans\LoanProducts::class, function (Faker $faker) {
    return [
        'product_name' 	    => $faker->word(15),
        'interest_method'   => $faker->word(10),
        'interest_rate'     => $faker->randomFloat(2,1.5,2.5),
        //'payment_frequency' => $faker->word(7,20),
        'payment_frequency' => 'monthly',
        'penalty_rate'      => $faker->randomFloat(2,1.5,2.5)
    ];
});
