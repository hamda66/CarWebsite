<?php

namespace Tests\Unit;

use Tests\TestCase;

class ContactPageTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_brand_page()
    {
        $response = $this->get('/brands');

        $response->assertStatus(200);
    }

    public function test_brand_context()
    {
        $response = $this->get('/brands');

        $response->assertSee('/imgs/logo4.png');

    }
}
