<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreatePostTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->post('/login', [
            'email' => 's@s.com',
            'password' => 'subodh@kalika',
            'is_active' => true,
        ]);

        $response = $this->post('/post', [
            'post_desc' => 'This is a post that is not more than 255 char',
            'user_id' => 1
        ]);
        
        $response->assertStatus(201);

    }
}
