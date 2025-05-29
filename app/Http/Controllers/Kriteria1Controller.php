<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DokumenModel;

class Kriteria1Controller extends Controller {
    public function feedback()
    {
        $breadcrumb = (object) [
            'title' => 'Inputan Dokumen',
            'list' => ['Feedback', 'Dokumen']
        ];

        $page = (object) [
            'title' => 'Daftar dokumen pada kriteria 1'
        ];

        $activeMenu = 'feedback';

        return view('feedback.feedback1', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }
    
    public function peningkatan() {
        $breadcrumb = (object) [
        'title' => 'Peningkatan',
        'list' => ['Kriteria 1', 'Peningkatan']
        ];

        $activeMenu = 'peningkatan';

        return view('peningkatan.kriteria1', [
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
        'list' => ['Kriteria 1', 'Pengendalian']
        ];

        $activeMenu = 'pengendalian';

        return view('pengendalian.kriteria1', [
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
            'judul' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'link' => 'nullable|url|max:100',
            'dokumen' => 'nullable|file|mimes:pdf,doc,docx|max:2048'
        ]);

        //Insialisasi upload file
        $filePath = null;
        if ($request->hasFile('dokumen')) {
            $file = $request->file('dokumen');
            $filePath = $file->store('kriteria1', 'public'); // simpan di storage/app/public/kriteria1
        }

        // Simpan ke database
        DokumenModel::create([
            'id_kriteria' => 'K-01',
            'id_tahap' => 'T-03',
            'nama_dokumen' => $request->input('judul'),
            'isi' => $request->input('deskripsi'),
            'link' => $request->input('link'),
            'file' => $filePath,
        ]);

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
            'judul' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'link' => 'nullable|url|max:100',
            'dokumen' => 'nullable|file|mimes:pdf,doc,docx|max:2048'
        ]);

        //Insialisasi upload file
        $filePath = null;
        if ($request->hasFile('dokumen')) {
            $file = $request->file('dokumen');
            $filePath = $file->store('kriteria1', 'public'); // simpan di storage/app/public/kriteria1
        }

        // Simpan ke database
        DokumenModel::create([
            'id_kriteria' => 'K-01',
            'id_tahap' => 'T-02',
            'nama_dokumen' => $request->input('judul'),
            'isi' => $request->input('deskripsi'),
            'link' => $request->input('link'),
            'file' => $filePath,
        ]);

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
            'judul' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'link' => 'nullable|url|max:100',
            'dokumen' => 'nullable|file|mimes:pdf,doc,docx|max:2048'
        ]);

        //Insialisasi upload file
        $filePath = null;
        if ($request->hasFile('dokumen')) {
            $file = $request->file('dokumen');
            $filePath = $file->store('kriteria1', 'public'); // simpan di storage/app/public/kriteria1
        }

        // Simpan ke database
        DokumenModel::create([
            'id_kriteria' => 'K-01',
            'id_tahap' => 'T-01',
            'nama_dokumen' => $request->input('judul'),
            'isi' => $request->input('deskripsi'),
            'link' => $request->input('link'),
            'file' => $filePath,
        ]);

        return back()->with('success', 'Data berhasil disimpan.');
    }
}