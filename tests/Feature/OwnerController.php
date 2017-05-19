<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class OwnerController extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    //check whether the url is available
    public function test_View_Owner_Page(){

        $response=$this->call('GET','/owner/viewall');
        $this->assertEquals('Welcome',$response->getContent());
        $this->assertTrue(strpos($response->getContent(),'Welcome')!=false);
    }
}
