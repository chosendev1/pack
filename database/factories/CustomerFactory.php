<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Customers\Customers::class, function (Faker $faker) {
    return [
	    'name_of_applicant' => $faker->name,
	    'fathers_name' => $faker->name,
	    'mothers_name' => $faker->name,
	    'spouses_name' => $faker->name,
	    'gender' => $faker->word(2),
	    'nationality' => 'Ugandan',
	    'association_id_number' => $faker->randomNumber(4),
	    'permanent_address' => $faker->address,
	    'mobile_no1' => $faker->e164PhoneNumber,
	    'mobile_no2' => $faker->e164PhoneNumber,
	    'member_number' => $faker->randomNumber(5),
	    'maritual_status' => $faker->word(6),
	    'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
	    'stage_of_operation' => $faker->word,
	    'motor_cycle_no_plate' => $faker->unique()->randomNumber(6),
	    'closet_land_mark' => $faker->streetName,
	    'other_sources_of_income' => $faker->word(10),
    ];
});
