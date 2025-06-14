<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kriteria4Controller extends Controller
{
    public function kriteria4() {
        $breadcrumb = (object) [
        'title' => '',
        'list' => ['Kriteria 4']
        ];

        $activeMenu = 'kriteria4';

        return view('kriteria.kriteria4', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }
}
