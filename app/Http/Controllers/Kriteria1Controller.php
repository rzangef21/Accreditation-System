<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DokumenModel;
use Yajra\DataTables\DataTables;

class Kriteria1Controller extends Controller {
    public function edit_ajax(string $id)
    {
        $dokumen = DokumenModel::find($id);

        return view('feedback.edit_ajax1', [
            'dokumen' => $dokumen
        ]);
    }

    public function list(Request $request){
        $data = DokumenModel::with(['validasi', 'tahap'])
            ->where('id_kriteria', 'K-01') // Sesuai dengan kriteria 1
            ->get();
        
        return DataTables::of($data)
        // Kolom index (nomor urut)
        ->addIndexColumn()

        // Menambahkan kolom tahap (nama_tahap dari relasi)
        ->addColumn('nama_tahap', function ($row) {
            return $row->tahap ? $row->tahap->nama_tahap : '-';
        })

        // Menambahkan kolom status (dari validasi)
        ->addColumn('status', function ($row) {
            return $row->validasi->status ?? 'menunggu';
        })

        // Menambahkan kolom komentar (dari validasi)
        ->addColumn('komentar', function ($row) {
            return $row->validasi ? $row->validasi->komentar : '-';
        })

        // Tambah kolom aksi (tombol HTML)
        ->addColumn('aksi', function ($row) {
            $btn  = '<button onclick="modalAction(\''.url('/feedback1/' . $row->id_dokumen . '/edit_ajax').'\')" class="btn btn-warning btn-sm">Edit</button> ';
            $btn .= '<button onclick="modalAction(\''.url('').'\')" class="btn btn-danger btn-sm">Hapus</button>';
            return $btn;
        })

        // Tandai kolom 'aksi' berisi HTML
        ->rawColumns(['aksi'])

        // Sesuaikan penamaan kolom agar cocok dengan frontend
        ->editColumn('id_dokumen', function ($row) {
            return $row->id_dokumen;
        })
        ->editColumn('nama_dokumen', function ($row) {
            return $row->nama_dokumen ?? '-';
        })

        ->make(true);
    }

    public function getFeedback1(Request $request)
    {
        if ($request->ajax()) {
            $data = DokumenModel::with(['validasi', 'tahap'])
                ->where('id_kriteria', 'K-01') // Sesuai dengan kriteria 1
                ->get();

            return DataTables::of($data)
                ->addColumn('id_dokumen', fn($row) => $row->id_dokumen)
                ->addColumn('nama_dokumen', fn($row) => $row->nama_dokumen)
                ->addColumn('nama_tahap', fn($row) => $row->tahap->nama_tahap ?? '-')
                ->addColumn('status', fn($row) => $row->validasi->status ?? 'menunggu')
                ->addColumn('komentar', fn($row) => $row->validasi->komentar ?? '-')
                ->addColumn('aksi', function($row) {
                    return '<a href="#" class="btn btn-sm btn-info">Detail</a>';
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
    }

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
            'id_tahap' => 'T-05',
            'nama_dokumen' => $request->input('judul'),
            'isi' => $request->input('deskripsi'),
            'link' => $request->input('link'),
            'file' => $filePath,
        ]);

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
            'id_tahap' => 'T-04',
            'nama_dokumen' => $request->input('judul'),
            'isi' => $request->input('deskripsi'),
            'link' => $request->input('link'),
            'file' => $filePath,
        ]);

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