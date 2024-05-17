<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showData() {
        $data = [
            'datum' => '2 t.e.m 8 juli',
            'datumOuder' => '2 t.e.m 11 juli',
            'thema' => 'Naar de ruimte',
            'datumBekend' => 'Belangrijke datum: 19 mei',
        ];

        return view('kamp', ['data' => $data]);
    }
}
