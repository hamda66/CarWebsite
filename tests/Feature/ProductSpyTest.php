<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductSpyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_spyProduct()
    {
        $product = \Mockery::spy('alias:App\Htto\Controllers\ProductController');

        $response = $this->post('/ProductController@Product',[
            'name'=>'Tesla',
            'Type'=>'Electric',
            'Year'=>'2020',
            'Color'=>'White'
        ]);

        $product->shouldReceive('create');

    $this->assertTrue(true);


    }
}
