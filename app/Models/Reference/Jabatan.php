<?php

namespace App\Models\Reference;

use App\Traits\CanGetTableNameStatically;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory, CanGetTableNameStatically;
    protected $table = 'ref_jabatan';
    protected $guarded = [];

    public function unit_kerja()
    {
        return $this->belongsTo(UnitKerja::class, 'id_unit_kerja');
    }

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'id_jabatan');
    }
}
