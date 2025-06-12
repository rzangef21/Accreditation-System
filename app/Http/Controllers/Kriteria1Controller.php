<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DokumenModel;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class Kriteria1Controller extends Controller {
    public function kriteria1() {
        $breadcrumb = (object) [
        'title' => '',
        'list' => ['Kriteria 1']
        ];

        $activeMenu = 'kriteria1';

        return view('kriteria.kriteria1', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }

    public function kriteria2() {
        $breadcrumb = (object) [
        'title' => '',
        'list' => ['Kriteria 2']
        ];

        $activeMenu = 'kriteria2';

        return view('kriteria.kriteria2', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }
    public function kriteria3() {
        $breadcrumb = (object) [
        'title' => '',
        'list' => ['Kriteria 3']
        ];

        $activeMenu = 'kriteria3';

        return view('kriteria.kriteria3', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }
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
    public function kriteria7() {
        $breadcrumb = (object) [
        'title' => '',
        'list' => ['Kriteria 7']
        ];

        $activeMenu = 'kriteria7';

        return view('kriteria.kriteria7', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }
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

    public function update_ajax(Request $request, string $id)
    {
        $dokumen = DokumenModel::find($id);

        if (!$dokumen) {
            return response()->json([
                'status' => false,
                'message' => 'Dokumen tidak ditemukan.'
            ]);
        }

        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama_dokumen' => 'required|string|max:255',
            'isi' => 'required|string',
            'link' => 'nullable|url',
            'file' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validasi gagal',
                'msgField' => $validator->errors()
            ]);
        }

        // Simpan perubahan ke database
        $dokumen->nama_dokumen = $request->nama_dokumen;
        $dokumen->isi = $request->isi;
        $dokumen->link = $request->link;

        // Jika ada file baru diupload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $randomName = Str::random(15);
            $extension = $file->getClientOriginalExtension();
            $newFileName = $randomName . '.' . $extension;
            $file->move(public_path('storage/kriteria1'), $newFileName);
            $dokumen->file = $newFileName;
        }

        $dokumen->save();

        return response()->json([
            'status' => true,
            'message' => 'Data dokumen berhasil diperbarui.'
        ]);
    }

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