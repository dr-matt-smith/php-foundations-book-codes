<?php
require_once __DIR__ . '/../vendor/autoload.php';
$faker = Faker\Factory::create();

print $faker->name . PHP_EOL;
print $faker->address . PHP_EOL;
print $faker->text. PHP_EOL;
