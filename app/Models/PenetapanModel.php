<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenetapanModel extends Model
{
    use HasFactory;
    protected $table = 'penetapan';
    protected $primaryKey = 'id_penetapan';
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
