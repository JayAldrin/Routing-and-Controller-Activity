<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function hobby() {
        $data = 'watching netflix series and playing video games';
        return view('Hobbies', ['hobby' => $data]);
    }
}
