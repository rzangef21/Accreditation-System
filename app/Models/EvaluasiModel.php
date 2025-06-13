<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluasiModel extends Model
{
    use HasFactory;
    protected $table = 'evaluasi';
    protected $primaryKey = 'id_evaluasi';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
    protected $fillable = [
        'id_kriteria',
        'id_tahap',
        'nama_dokumen',
        'isi',
        'link',
        'file',
    ];

    public function kriteria()
    {
        return $this->belongsTo(KriteriaModel::class, 'id_kriteria', 'id_kriteria');
    }

    public function tahap()
    {
        return $this->belongsTo(TahapModel::class, 'id_tahap', 'id_tahap');
    }
}
