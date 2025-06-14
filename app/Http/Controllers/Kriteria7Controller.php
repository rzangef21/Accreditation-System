<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kriteria7Controller extends Controller
{
    public function kriteria7() {
        $breadcrumb = (object) [
        'title' => '',
        'list' => ['Kriteria 7']
        ];

        $activeMenu = 'kriteria7';

        return view('kriteria.kriteria7', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }
}
