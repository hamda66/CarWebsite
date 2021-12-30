<?php

namespace Tests\Unit;

use Tests\TestCase;

class AboutPageTest extends TestCase
{
    /**
     * A basic unit test 
     *
     * @return void
     */
    public function test_about_page()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }
}
