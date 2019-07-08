<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Branches\Branch::class, function (Faker $faker) {
    return [
    	'company_id'     => function () {
            return factory(App\Models\Companies\Company::class)->create()->id;
        },
	    'branch_name' => $faker->name,
	    'district' => $faker->name,
	    'location' => $faker->address,
	    'telephone_number' => $faker->e164PhoneNumber,
	    'contact_person' => $faker->name,
	    'contact_person_position' => 'General Manager',
	    'contact_phone_number' => $faker->e164PhoneNumber
    ];
});
