<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Kriteria1Controller extends Controller {
    public function evaluasi() {
        $breadcrumb = (object) [
        'title' => 'Evaluasi',
        'list' => ['Kriteria 1', 'Evaluasi']
        ];

        $activeMenu = 'evaluasi';

        return view('evaluasi.kriteria1', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }

    public function storeEvaluasi(Request $request)
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

    public function penetapan() {
        $breadcrumb = (object) [
        'title' => 'Penetapan',
        'list' => ['Kriteria 1', 'Penetapan']
        ];

        $activeMenu = 'penetapan';

        return view('penetapan.kriteria1', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }

    public function storePelaksanaan(Request $request)
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

    public function pelaksanaan() {
        $breadcrumb = (object) [
        'title' => 'Pelaksanaan',
        'list' => ['Kriteria 1', 'Pelaksanaan']
        ];

        $activeMenu = 'pelaksanaan';

        return view('pelaksanaan.kriteria1', [
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