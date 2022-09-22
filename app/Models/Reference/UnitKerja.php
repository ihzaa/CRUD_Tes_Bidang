<?php

namespace App\Models\Reference;

use App\Traits\CanGetTableNameStatically;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    use HasFactory, CanGetTableNameStatically;

    protected $table = 'ref_unit_kerja';
    protected $fillable = [
        'name'
    ];

    public function jabatans()
    {
        return $this->hasMany(Jabatan::class, 'id_unit_kerja');
    }

    // THIS MUST BE IN REPOSITORY
    public static function store($validated)
    {
        try {
            $data = self::create($validated);
            return $data;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
