<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kriteria6Controller extends Controller
{
    public function kriteria6() {
        $breadcrumb = (object) [
        'title' => '',
        'list' => ['Kriteria 6']
        ];

        $activeMenu = 'kriteria6';

        return view('kriteria.kriteria6', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }
}
