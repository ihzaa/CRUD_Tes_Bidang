<?php

namespace App\Models\Reference;

use App\Models\Transaction\CutiPegawai;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'ref_pegawai';

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan');
    }

    public function cuti_pegawais()
    {
        return $this->hasMany(CutiPegawai::class, 'id_pegawai');
    }
}
