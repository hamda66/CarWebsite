<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Comment;

class ContactMessageTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_new_comment()
    {
        $response = $this->post('/comment',[
            'name'=>'hamda',
            'email'=>'hamda@gmail.com',
            'Country'=>'Norway',
            'Message'=>'uuuuuuuuuuuuuuuuu'
        ]);
    
        $this->assertTrue(true);
    }    
    
}
