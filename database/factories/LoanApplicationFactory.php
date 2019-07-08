<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Loans\LoanApplications::class, function (Faker $faker) {
    return [
        'company_id'     => function () {
            return factory(App\Models\Companies\Company::class)->create()->id;
        },
        'branch_id'     => function () {
            return factory(App\Models\Branches\Branch::class)->create()->id;
        },
        'customers_id'     => function () {
            return factory(App\Models\Customers\Customers::class)->create()->id;
        },
        'loan_products_id'     => function () {
            return factory(App\Models\Loans\LoanProducts::class)->create()->id;
        },
        'amount' 		  => $faker->numberBetween(200000,1000000),
        'period' 		  => $faker->numberBetween(2,10),
        'date' 			  => $faker->date('Y-m-d','now')
        
    ];
});
