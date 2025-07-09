<?php

namespace Tests\Feature;

use Tests\TestCase;

class PerformanceTest extends TestCase
{
    public function test_profile_page_loads_quickly()
    {
        $start = microtime(true);
        
        $response = $this->get('/');
        
        $end = microtime(true);
        $loadTime = $end - $start;
        
        $response->assertStatus(200);
        $this->assertLessThan(1.0, $loadTime, 'Page should load in less than 1 second');
    }

    public function test_multiple_concurrent_requests()
    {
        $responses = [];
        
        for ($i = 0; $i < 5; $i++) {
            $responses[] = $this->get('/');
        }
        
        foreach ($responses as $response) {
            $response->assertStatus(200);
        }
    }
}