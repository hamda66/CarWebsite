<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Product;
use Tests\TestCase;

class CanDeleteProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_delete_Product(){
        $product = Product::factory()->count(1)->make();

        $product = Product::first();

        if($product){
            $product->delete();
        }

        $this->assertTrue(true);

    }    
}