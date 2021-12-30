<?php

namespace Tests\Unit;

use Tests\TestCase;

class homeIconTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_homeIcon()
    {
        $response = $this->get('/');

        $response->assertSee('Register');  $response->assertSee('Login');
        
        $response->assertSee('Contact');  $response->assertSee('About');

        $response->assertSee('Brands');

        $this->assertTrue(true);
    }
}
