<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Companies\Company::class, function (Faker $faker) {
    return [
	    'company_name' => $faker->name,
	    'district' => $faker->name,
	    'location' => $faker->address,
	    'telephone_number' => $faker->e164PhoneNumber,
	    'contact_person' => $faker->name,
	    'contact_person_position' => 'General Manager',
	    'contact_phone_number' => $faker->e164PhoneNumber,
	    'date_established' => $faker->date('Y-m-d','now'),
	    'company_logo' => $faker->word,
    ];
});
