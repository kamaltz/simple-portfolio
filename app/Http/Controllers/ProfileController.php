<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profileData = [
            'name' => 'Dena Kamal D.',
            'student_id' => '2206090',
            'major' => 'Informatika',
            'institution' => 'Institut Teknologi Garut',
            'passion' => 'Full Stack Developer'
        ];

        return view('profile', compact('profileData'));
    }
}