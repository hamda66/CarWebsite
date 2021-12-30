<?php

namespace Tests\Unit;

use Tests\TestCase;

class homepagetitleTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_home()
    {
        $response = $this->get('/');

        $response->assertSee('PERFECT WHEELS');

        $this->assertTrue(true);
    }
}
