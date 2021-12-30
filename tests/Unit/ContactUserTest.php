<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Comment;

class ContactUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_spam_messages()
    {
        $user1= Comment::make([
            'name' => 'rom',
            'Message'=>'new message'
        ]);
        $user2= Comment::make([
            'name' => 'tim',
            'Message'=>'new message2'
        ]);

        $this->assertTrue($user1->Message != $user2->Message);
    }
}
