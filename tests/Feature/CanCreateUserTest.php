<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CanCreateUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_new_users(){
        $response = $this->post('/RegisterController@register',[
            'name'=>'hamda',
            'email'=>'hamda@gmail.com',
            'password'=>'hamdapass',
            'password_confirmation'=>'hamdapass'
        ]);
    
        $this->assertTrue(true);
    } 
}
