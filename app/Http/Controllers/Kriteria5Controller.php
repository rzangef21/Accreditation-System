<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kriteria5Controller extends Controller
{
    public function kriteria5() {
        $breadcrumb = (object) [
        'title' => '',
        'list' => ['Kriteria 5']
        ];

        $activeMenu = 'kriteria5';

        return view('kriteria.kriteria5', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }
}
