<?php

namespace App\Models\Transaction;

use App\Models\Reference\Pegawai;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CutiPegawai extends Model
{
    use HasFactory;
    protected $table = 'trans_cuti_pegawai';

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
