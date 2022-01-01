<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_Create_New_Products()
    {
        $response = $this->post('/ProductController@product',[
            'name'=>'Tesla',
            'Type'=>'Electric',
            'Year'=>'2020',
            'Color'=>'White'
        ]);
    
        $this->assertTrue(true);
    }
}
