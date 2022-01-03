<?php

namespace Tests\Unit;

use Tests\TestCase;

class DoesStoreExistTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/store');

        $response->assertStatus(404);
    }
}
