<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class authenticationTest extends TestCase
{
    /**
     * @test
     *
     * 
     */
    public function authenticated_to_a_user()
    {
        

        $credentials = [
            "email"       => "user@mail.com",
            "password"    => "12345",
            "device_name" => "Web"
        ];

        $response = $this->post('/api/token', $credentials);

        $response->assertStatus(200);
    }
}
