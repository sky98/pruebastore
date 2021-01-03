<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class productsTest extends TestCase
{
    /**
     @test
     */
    public function Example()
    {
        $response = $this->get('/api/products');

        $response->assertStatus(200);
    }
}
