<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CarController extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

        //check whether the url is available

        public function test_Add_Car_Page()
        {
            $response = $this->call('GET', '/addcar');
            $this->assertEquals('Welcome', $response->getContent());
            $this->assertTrue(strpos($response->getContent(), 'Welcome') != false);
        }

//check form elements
        public function testAddCarForm(){
        $this->visit('/addcar')
            ->type('Toyota', 'brand')
            ->type('Luxury', 'type')
            ->type('Manual', 'condition')
            ->type('1000', 'price')
            ->type('5', 'passengers')
            ->check('insurance')
            ->check('no_plate')
            ->check('image')
            ->press('Add Car');

        }

}
