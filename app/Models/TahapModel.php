<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DokumenModel;

class TahapModel extends Model
{
    protected $table = 'tahap';
    protected $primaryKey = 'id_tahap';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_tahap',
        'nama_tahap',
    ];

    public function dokumen()
    {
        return $this->hasMany(DokumenModel::class, 'id_tahap', 'id_tahap');
    }
}
