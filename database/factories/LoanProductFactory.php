<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Loans\LoanProduct::class, function (Faker $faker) {
    return [
        'product_name' 	  => $faker->word(15);
        'interest_method' => $faker->word(10);
        'interest_rate'   => $faker->randomFloat(2,1.5,2.5);
        'penalty_rate'    => $faker->randomFloat(2,1.5,2.5);
    ];
});
