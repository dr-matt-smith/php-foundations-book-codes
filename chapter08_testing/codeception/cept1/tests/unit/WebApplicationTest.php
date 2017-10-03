<?php

use Itb\WebApplication;

class WebApplicationTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
        require_once __DIR__ . '/../../vendor/autoload.php';
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        // arrange

        // act
        $app = new WebApplication();

        // assert
        $this->assertNotNull($app);

    }
}