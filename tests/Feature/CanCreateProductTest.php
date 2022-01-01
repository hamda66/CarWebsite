<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Product;

class CanCreateProductTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_Create_New_Products()
    {
        $response = $this->post('/ProductController@Product',[
            'name'=>'Tesla',
            'Type'=>'Electric',
            'Year'=>'2020',
            'Color'=>'White'
        ]);
    
        $this->assertTrue(true);
    }
}
