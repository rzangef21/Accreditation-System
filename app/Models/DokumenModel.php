<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenModel extends Model
{
    use HasFactory;
    protected $table = 'dokumen';
    protected $primaryKey = 'id_dokumen';
    public $timestamps = false;

    protected $fillable = [
        'id_kriteria',
        'id_tahap',
        'nama_dokumen',
        'isi',
        'link',
        'file',
    ];

    public function validasi()
    {
        return $this->hasOne(ValidasiModel::class, 'id_dokumen', 'id_dokumen');
    }

    public function tahap()
    {
        return $this->belongsTo(TahapModel::class, 'id_tahap', 'id_tahap');
    }
}
