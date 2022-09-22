<?php

namespace App\Http\Controllers\Web\Reference;

use App\Http\Controllers\Controller;
use App\Models\Reference\UnitKerja;
use App\Utils\FlashMessageHelper;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class UnitKerjaController extends Controller
{
    public function index()
    {
        return view('referece.unit_kerja.index');
    }

    public function datatables()
    {
        $model = UnitKerja::query();

        return DataTables::eloquent($model)
            ->addColumn('action', function ($obj) {
                return '<a class="btn btn-sm btn-success" href="' . route('unit_kerja.show', ['id' => $obj->id]) . '" data-toggle="tooltip" data-placement="top" title="Lihat Detail"><i class="far fa-eye"></i></a>';
            })
            ->make(true);;
    }

    public function create()
    {
        return view('referece.unit_kerja.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', Rule::unique(UnitKerja::getTableName())]
        ]);

        $storedData = UnitKerja::store($validated);
        if ($storedData instanceof Model) {
            return redirect(route('unit_kerja.show', ['id' => $storedData->id]));
        } else {
            FlashMessageHelper::alert('error', $storedData);
            return back();
        }
    }

    public function show($id)
    {
        $data['obj'] = UnitKerja::findOrFail($id);
        return view('referece.unit_kerja.show', compact('data'));
    }

    public function delete($id)
    {
        UnitKerja::findOrFail($id)->delete();
        FlashMessageHelper::alert('success', 'Berhasil Hapus Unit Kerja');
        return redirect(route('unit_kerja.index'));
    }

    public function edit($id)
    {
        $data['obj'] = UnitKerja::findOrFail($id);
        return view('referece.unit_kerja.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data['obj'] = UnitKerja::findOrFail($id);
        $validated = $request->validate([
            'name' => ['required', Rule::unique(UnitKerja::getTableName())->ignore($data['obj'])]
        ]);

        $data['obj']->update($validated);

        FlashMessageHelper::alert('success', 'Berhasil Update Unit Kerja');

        return redirect(route('unit_kerja.show', ['id' => $id]));
    }
}
