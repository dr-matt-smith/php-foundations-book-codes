<?php
namespace Itb;

use Faker\Factory;

class Application
{
    private $people = [];

    public function __construct()
    {
        $person = Factory::create();
        $this->people[] = $person;

        $person = Factory::create();
        $this->people[] = $person;

        $person = Factory::create();
        $this->people[] = $person;
    }

    public function run()
    {
        $objects = $this->people;
        foreach($objects as $person){
            print 'name = ' . $person->name . PHP_EOL;
            print 'address = ' . $person->address;
            print PHP_EOL . '-----------' . PHP_EOL;
        }
    }
}
