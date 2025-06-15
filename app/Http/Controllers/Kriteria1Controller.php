<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\PenetapanModel;
use App\Models\PelaksanaanModel;
use App\Models\EvaluasiModel;
use App\Models\PengendalianModel;
use App\Models\PeningkatanModel;
use App\Models\ValidasiModel;

class Kriteria1Controller extends Controller {
    public function feedback1() {
        $breadcrumb = (object) [
        'title' => '',
        'list' => ['Kriteria 1']
        ];

        $activeMenu = 'feedback1';

        return view('feedback.feedback1', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }

    public function list(Request $request)
    {
        $query = ValidasiModel::with([
            'penetapan:id_penetapan,nama_dokumen',
            'validasi_berjenjang' => function ($q) {
                $q->orderBy('level_validasi');
            }
        ])
        ->where('level_validasi', 'tingkat1'); // hanya level awal (user id=10)

        return DataTables::of($query)
            ->addColumn('id_dokumen', function ($row) {
                return $row->id_validasi;
            })
            ->addColumn('nama_dokumen', function ($row) {
                return $row->penetapan->nama_dokumen ?? '-';
            })
            ->addColumn('status', function ($row) {
                return $row->validasi_berjenjang->map(function($v) {
                    return ucfirst($v->level_validasi) . ': ' . ucfirst($v->status);
                })->implode('<br>');
            })
            ->addColumn('komentar', function ($row) {
                return $row->validasi_berjenjang
                    ->where('status', 'ditolak')
                    ->map(function($v) {
                        return '<strong>' . ucfirst($v->level_validasi) . ':</strong> ' . e($v->komentar);
                    })->implode('<br>');
            })
            ->addColumn('aksi', function ($row) {
                $btn  = '<button onclick="modalAction(\''.url('' .  '').'\')" class="btn btn-warning btn-sm">Edit</button> ';
                $btn .= '<button onclick="modalAction(\''.url('').'\')" class="btn btn-danger btn-sm">Hapus</button>';
                return $btn;
            })
            ->rawColumns(['status', 'komentar', 'aksi'])
            ->make(true);
    }

    public function storeValidasi1(Request $request){
        // Validasi input
        $request->validate([
            'dokumen_penetapan' => 'nullable|file|mimes:pdf|max:2048',
            'dokumen_pelaksanaan' => 'nullable|file|mimes:pdf|max:2048',
            'dokumen_evaluasi' => 'nullable|file|mimes:pdf|max:2048',
            'dokumen_pengendalian' => 'nullable|file|mimes:pdf|max:2048',
            'dokumen_peningkatan' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        // Simpan data ke tabel penetapan
        $penetapan = PenetapanModel::create([
            'id_kriteria' => 'K-01',
            'id_tahap' => 'T-01',
            'nama_dokumen' => $request->input('judul_penetapan'),
            'isi' => $request->input('deskripsi_penetapan'),
            'link' => $request->input('link_penetapan'),
            'file' => $this->uploadFile($request, 'dokumen_penetapan'),
        ]);

        // Simpan data ke tabel pelaksanaan
        $pelaksanaan = PelaksanaanModel::create([
            'id_kriteria' => 'K-01',
            'id_tahap' => 'T-02',
            'nama_dokumen' => $request->input('judul_pelaksanaan'),
            'isi' => $request->input('deskripsi_pelaksanaan'),
            'link' => $request->input('link_pelaksanaan'),
            'file' => $this->uploadFile($request, 'dokumen_pelaksanaan'),
        ]);

        // Simpan data ke tabel evaluasi
        $evaluasi = EvaluasiModel::create([
            'id_kriteria' => 'K-01',
            'id_tahap' => 'T-03',
            'nama_dokumen' => $request->input('judul_evaluasi'),
            'isi' => $request->input('deskripsi_evaluasi'),
            'link' => $request->input('link_evaluasi'),
            'file' => $this->uploadFile($request, 'dokumen_evaluasi'),
        ]);

        // Simpan data ke tabel pengendalian
        $pengendalian = PengendalianModel::create([
            'id_kriteria' => 'K-01',
            'id_tahap' => 'T-04',
            'nama_dokumen' => $request->input('judul_pengendalian'),
            'isi' => $request->input('deskripsi_pengendalian'),
            'link' => $request->input('link_pengendalian'),
            'file' => $this->uploadFile($request, 'dokumen_pengendalian'),
        ]);

        // Simpan data ke tabel peningkatan
        $peningkatan = PeningkatanModel::create([
            'id_kriteria' => 'K-01',
            'id_tahap' => 'T-05',
            'nama_dokumen' => $request->input('judul_peningkatan'),
            'isi' => $request->input('deskripsi_peningkatan'),
            'link' => $request->input('link_peningkatan'),
            'file' => $this->uploadFile($request, 'dokumen_peningkatan'),
        ]);

        // Simpan ke tabel validasi1
        ValidasiModel::create([
            'id_penetapan' => $penetapan->id_penetapan,
            'id_pelaksanaan' => $pelaksanaan->id_pelaksanaan,
            'id_evaluasi' => $evaluasi->id_evaluasi,
            'id_pengendalian' => $pengendalian->id_pengendalian,
            'id_peningkatan' => $peningkatan->id_peningkatan,
            'id_user' => 10, // sesuaikan kolom
            'level_validasi' => 'tingkat1',
            'status' => $request->input('action') === 'submit' ? 'menunggu' : 'menunggu',
            'komentar' => null,
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

    protected function uploadFile($request, $field)
    {
        if ($request->hasFile($field)) {
            $file = $request->file($field);

            // Validasi ekstensi file: hanya PDF
            if (strtolower($file->getClientOriginalExtension()) !== 'pdf') {
                throw new \Exception('File yang diunggah pada ' . $field . ' harus berupa PDF.');
            }

            // Validasi ukuran maksimal: 2MB (dalam byte = 2 * 1024 * 1024)
            if ($file->getSize() > 2 * 1024 * 1024) {
                throw new \Exception('Ukuran file pada ' . $field . ' tidak boleh lebih dari 2MB.');
            }

            // Buat nama file unik
            $finalName = Str::random(15) . '.pdf';

            // Simpan file
            $path = $file->storeAs('kriteria1', $finalName, 'public');

            return $path;
        }
        return null;
    }

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
}