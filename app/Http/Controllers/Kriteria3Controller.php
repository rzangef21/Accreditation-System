<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kriteria3Controller extends Controller
{
    public function kriteria3() {
        $breadcrumb = (object) [
        'title' => '',
        'list' => ['Kriteria 3']
        ];

        $activeMenu = 'kriteria3';

        return view('kriteria.kriteria3', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }
}
