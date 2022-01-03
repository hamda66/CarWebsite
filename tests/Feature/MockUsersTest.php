<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Database\Factories;

class MockUsersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

      /**
    * @runInSeparateProcess
    * @preserveGlobalState disabled
    */

    public function test_mock_users()
    {
        $mockUsers = \Mockery::mock('alias:App\Models\Users');

        $response = $this->post('/RegisterController@mockUsers',[
            'name'=>'hamda',
            'email'=>'hamda@gmail.com',
            'password'=>'hamdapass',
            'password_confirmation'=>'hamdapass'
        ]);
    
        $this->assertTrue(true);
    } 
    }

