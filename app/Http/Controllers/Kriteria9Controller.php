<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kriteria9Controller extends Controller
{
    public function kriteria9() {
        $breadcrumb = (object) [
        'title' => '',
        'list' => ['Kriteria 9']
        ];

        $activeMenu = 'kriteria9';

        return view('kriteria.kriteria9', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }
}
