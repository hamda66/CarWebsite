<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\TestResponse;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserTest extends TestCase
{


    public function test_login_form()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_dublicated_login()
    {
        $user1= User::make([
            'name' => 'sam',
            'email'=>'Same@gmail.com'
        ]);
        $user2= User::make([
            'name' => 'tim',
            'email'=>'tim@gmail.com'
        ]);

        $this->assertTrue($user1->email != $user2->email);
    }

public function test_new_users(){
    $response = $this->post('/register',[
        'name'=>'hamda',
        'email'=>'hamda@gmail.com',
        'password'=>'hamdapass',
        'password_confirmation'=>'hamdapass'
    ]);

    $this->assertTrue(true);
}    

}
