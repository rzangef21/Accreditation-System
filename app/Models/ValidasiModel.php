<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValidasiModel extends Model
{
    use HasFactory;
    protected $table = 'validasi';
    protected $primaryKey = 'id_validasi';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
    protected $fillable = [
        'id_penetapan',
        'id_pelaksanaan',
        'id_evaluasi',
        'id_pengendalian',
        'id_peningkatan',
        'id_user',
        'level_validasi',
        'status',
        'komentar',
    ];

    public function penetapan()
    {
        return $this->belongsTo(PenetapanModel::class, 'id_penetapan', 'id_penetapan');
    }

    public function pelaksanaan()
    {
        return $this->belongsTo(PelaksanaanModel::class, 'id_pelaksanaan', 'id_pelaksanaan');
    }

    public function evaluasi()
    {
        return $this->belongsTo(EvaluasiModel::class, 'id_evaluasi', 'id_evaluasi');
    }

    public function pengendalian()
    {
        return $this->belongsTo(PengendalianModel::class, 'id_pengendalian', 'id_pengendalian');
    }

    public function peningkatan()
    {
        return $this->belongsTo(PeningkatanModel::class, 'id_peningkatan', 'id_peningkatan');
    }

    public function user()
    {
        return $this->belongsTo(UserModel::class, 'id_user', 'id_user');
    }
    public function validasi_berjenjang(){
        return $this->hasMany(ValidasiModel::class, 'id_penetapan', 'id_penetapan');
    }
}
