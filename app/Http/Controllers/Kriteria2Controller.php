<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kriteria2Controller extends Controller
{
    public function kriteria2() {
        $breadcrumb = (object) [
        'title' => '',
        'list' => ['Kriteria 2']
        ];

        $activeMenu = 'kriteria2';

        return view('kriteria.kriteria2', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }
}
