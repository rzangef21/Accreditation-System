<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kriteria2Controller extends Controller
{
    public function feedback()
    {
        $breadcrumb = (object) [
            'title' => 'Inputan Dokumen',
            'list' => ['Feedback', 'Dokumen']
        ];

        $page = (object) [
            'title' => 'Daftar dokumen pada kriteria 2'
        ];

        $activeMenu = 'feedback';

        return view('feedback.feedback2', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }
    
    public function peningkatan() {
        $breadcrumb = (object) [
        'title' => 'Peningkatan',
        'list' => ['Kriteria 2', 'Peningkatan']
        ];

        $activeMenu = 'peningkatan';

        return view('peningkatan.kriteria2', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }

    public function storePeningkatan(Request $request)
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

    public function pengendalian() {
        $breadcrumb = (object) [
        'title' => 'Pengendalian',
        'list' => ['Kriteria 2', 'Pengendalian']
        ];

        $activeMenu = 'pengendalian';

        return view('pengendalian.kriteria2', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }

    public function storePengendalian(Request $request)
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

    public function evaluasi() {
        $breadcrumb = (object) [
        'title' => 'Evaluasi',
        'list' => ['Kriteria 2', 'Evaluasi']
        ];

        $activeMenu = 'evaluasi';

        return view('evaluasi.kriteria2', [
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
        'list' => ['Kriteria 2', 'Penetapan']
        ];

        $activeMenu = 'penetapan';

        return view('penetapan.kriteria2', [
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
        'list' => ['Kriteria 2', 'Pelaksanaan']
        ];

        $activeMenu = 'pelaksanaan';

        return view('pelaksanaan.kriteria2', [
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
