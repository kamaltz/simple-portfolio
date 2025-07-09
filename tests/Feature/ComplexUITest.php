<?php

namespace Tests\Feature;

use Tests\TestCase;

class ComplexUITest extends TestCase
{
    public function test_navigation_sections_exist()
    {
        $response = $this->get('/');
        
        $response->assertSee('About');
        $response->assertSee('Skills');
        $response->assertSee('Contact');
    }

    public function test_profile_header_content()
    {
        $response = $this->get('/');
        
        $response->assertSee('DKD');
        $response->assertSee('Dena Kamal D.');
        $response->assertSee('Full Stack Developer');
    }

    public function test_skills_section_technologies()
    {
        $response = $this->get('/');
        
        $response->assertSee('Laravel');
        $response->assertSee('React');
        $response->assertSee('JavaScript');
        $response->assertSee('PHP');
    }

    public function test_education_section_exists()
    {
        $response = $this->get('/');
        
        $response->assertSee('Education');
        $response->assertSee('Specialization');
        $response->assertSee('Institut Teknologi Garut');
    }

    public function test_contact_section_links()
    {
        $response = $this->get('/');
        
        $response->assertSee('fa-envelope');
        $response->assertSee('fa-linkedin');
        $response->assertSee('fa-github');
    }
}