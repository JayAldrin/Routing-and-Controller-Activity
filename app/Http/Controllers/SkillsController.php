<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function skill() {
        $data = 'I can play the Guitar, Drums, Bass Guitar, ukelele, A little bit of organ';
        return view('Skills', ['skills' => $data]);
    }
}
