<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kriteria8Controller extends Controller
{
    public function kriteria8() {
        $breadcrumb = (object) [
        'title' => '',
        'list' => ['Kriteria 8']
        ];

        $activeMenu = 'kriteria8';

        return view('kriteria.kriteria8', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }
}
