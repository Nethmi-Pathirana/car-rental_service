<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RenterController extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    //check whether the url is available
    public function test_View_Renter_Page(){

        $response=$this->call('GET','/renter/viewall');
        $this->assertEquals('Welcome',$response->getContent());
        $this->assertTrue(strpos($response->getContent(),'Welcome')!=false);

    }
}
