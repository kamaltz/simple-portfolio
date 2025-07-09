<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProfilePageTest extends TestCase
{
    /**
     * Test untuk memastikan halaman utama (profil) merespon dengan status sukses (200 OK).
     */
    public function test_profile_page_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Test untuk memastikan halaman profil menampilkan data yang benar.
     */
    public function test_profile_page_contains_correct_information(): void
    {
        $response = $this->get('/');

        $response->assertSee('Dena Kamal D.');
        $response->assertSee('2206090');
        $response->assertSee('Informatika');
        $response->assertSee('Institut Teknologi Garut');
    }
}