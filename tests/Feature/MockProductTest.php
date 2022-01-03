<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;

class MockProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

     /**
 * @runInSeparateProcess
 * @preserveGlobalState disabled
 */
    public function test_Mock_products()
    {
        $mockProducts = \Mockery::mock('alias:App\Models\Product');

        $response = $this->post('/ProductController@mockProduct',[
            'name'=>'Nissan',
            'Type'=>'Electric',
            'Year'=>'2018',
            'Color'=>'red'
        ]);
    
        $this->assertTrue(true);

    }
}
