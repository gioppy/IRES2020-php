<?php

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('it_IT');
print $faker->name();
print $faker->address;
print $faker->sentence(400);
