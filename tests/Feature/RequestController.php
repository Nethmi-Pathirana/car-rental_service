<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RequestController extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    //check whether the url is available
    public function test_Owner_Request_Page(){

        $response=$this->call('GET','/ownerreq');
        $this->assertEquals('Welcome',$response->getContent());
        $this->assertTrue(strpos($response->getContent(),'Welcome')!=false);
    }

    public function test_Rent_Request_Page(){

        $response=$this->call('GET','/renterreq');
        $this->assertEquals('Welcome',$response->getContent());
        $this->assertTrue(strpos($response->getContent(),'Welcome')!=false);
    }
}
