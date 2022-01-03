<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class databasehasTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_detabase()
    {
        $this->assertDatabaseMissing('users', [
            'name' => 'Hamda@gmail.com'
        ]);

        $this->assertDatabaseMissing('products', [
            'Name' => 'tesla'
        ]);

        $this->assertDatabaseMissing('usercomment', [
            'Country' => 'Sweden'
        ]);
    }

}
