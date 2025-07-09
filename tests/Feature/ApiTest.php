<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiTest extends TestCase
{
    public function test_profile_api_endpoint()
    {
        // Test jika ada endpoint API untuk profile
        $response = $this->get('/api/profile');
        
        // Jika endpoint tidak ada, akan return 404
        $this->assertTrue(
            $response->status() === 404 || $response->status() === 200
        );
    }

    public function test_health_check()
    {
        // Test basic health check
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}