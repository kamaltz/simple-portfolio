<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProfilePageTest extends TestCase
{
    public function test_profile_page_returns_successful_response()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_profile_page_contains_correct_information()
    {
        $response = $this->get('/');
        
        $response->assertSee('Dena Kamal D.');
        $response->assertSee('2206090');
        $response->assertSee('Informatika');
        $response->assertSee('Institut Teknologi Garut');
        $response->assertSee('Full Stack Developer');
        $response->assertSee('Skills');
        $response->assertSee('Contact');
    }

    public function test_profile_page_has_correct_title()
    {
        $response = $this->get('/');
        $response->assertSee('<title>Dena Kamal D. - Portfolio</title>', false);
    }

    public function test_profile_page_contains_social_links()
    {
        $response = $this->get('/');
        $response->assertSee('fab fa-github');
        $response->assertSee('fab fa-linkedin');
        $response->assertSee('fas fa-envelope');
    }

    public function test_profile_route_name()
    {
        $response = $this->get(route('profile'));
        $response->assertStatus(200);
    }
}