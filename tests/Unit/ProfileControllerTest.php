<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;

class ProfileControllerTest extends TestCase
{
    public function test_profile_controller_returns_view()
    {
        $controller = new ProfileController();
        $response = $controller->index();
        
        $this->assertEquals('profile', $response->getName());
    }

    public function test_profile_controller_passes_correct_data()
    {
        $controller = new ProfileController();
        $response = $controller->index();
        
        $data = $response->getData();
        
        $this->assertArrayHasKey('profileData', $data);
        $this->assertEquals('Dena Kamal D.', $data['profileData']['name']);
        $this->assertEquals('2206090', $data['profileData']['student_id']);
        $this->assertEquals('Informatika', $data['profileData']['major']);
        $this->assertEquals('Institut Teknologi Garut', $data['profileData']['institution']);
    }
}