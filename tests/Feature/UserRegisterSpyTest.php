<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Kernel;
use Tests\TestCase;

class UserRegisterSpyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSpyUser()
 {
    $user = \Mockery::spy('alias:App\Htto\Controllers\Auth\RegisterController\register');

    $response = $this->post('/RegisterController@register',[
        'name'=>'sam',
        'email'=>'tim@gmail.com',
        'password'=>'paa',
        'password_confirmation'=>'paa'
    ]);
  
    $user->shouldReceive('create');
    $user->shouldReceive('adddata');

    $this->assertTrue(true);

 }
}
