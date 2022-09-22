<?php

namespace App\Models\Reference;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    use HasFactory;

    protected $table = 'ref_unit_kerja';

    public function jabatans()
    {
        return $this->hasMany(Jabatan::class, 'id_unit_kerja');
    }
}
