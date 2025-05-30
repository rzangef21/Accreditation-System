<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValidasiModel extends Model
{
    use HasFactory;
    protected $table = 'validasi';
    protected $primaryKey = 'id_validasi';
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'id_dokumen',
        'status',
        'komentar',
    ];

    public function dokumen()
    {
        return $this->belongsTo(DokumenModel::class, 'id_dokumen', 'id_dokumen');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
