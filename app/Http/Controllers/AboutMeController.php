<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index() {
        $data = array (
            'name' => "Jay Aldrin",
            'surname' => "Prado",
            'bday' => "May 21, 2003",
            'age' => "21 years old"
        );
        return view('About-Me', ['data' => $data]);
    }
}
