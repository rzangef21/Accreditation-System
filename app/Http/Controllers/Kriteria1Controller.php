<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Kriteria1Controller extends Controller {
    public function penetapan() {
        $breadcrumb = (object) [
        'title' => 'Penetapan',
        'list' => ['Kriteria 1', 'Penetapan']
        ];

        $activeMenu = 'level'; // Sesuai sidebar

        return view('penetapan.kriteria1', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }
    
    public function storePenetapan(Request $request)
    {
        // Validasi dan simpan data
        $request->validate([
            'deskripsi' => 'required|string',
            'link' => 'nullable|url',
            'dokumen' => 'nullable|file|mimes:pdf,doc,docx'
        ]);

        // Simpan logika atau database di sini...

        return back()->with('success', 'Data berhasil disimpan.');
    }
}