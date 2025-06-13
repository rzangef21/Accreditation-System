<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;
    protected $table = 'level';
    protected $primaryKey = 'id_level';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = [
        'id_level',
        'nama_level',
    ];

    public function users()
    {
        return $this->hasMany(UserModel::class, 'id_level', 'id_level');
    }
}
