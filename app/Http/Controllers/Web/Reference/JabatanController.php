<?php

namespace App\Http\Controllers\Web\Reference;

use App\Http\Controllers\Controller;
use App\Models\Reference\Jabatan;
use App\Models\Reference\UnitKerja;
use App\Utils\FlashMessageHelper;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JabatanController extends Controller
{
    public function index()
    {
        return view('referece.jabatan.index');
    }

    public function datatables()
    {
        $model = Jabatan::query();

        return DataTables::eloquent($model)
            ->addColumn('action', function ($obj) {
                return '<a class="btn btn-sm btn-success" href="" data-toggle="tooltip" data-placement="top" title="Lihat Detail"><i class="far fa-eye"></i></a>';
            })
            ->make(true);;
    }

    public function create()
    {
        $data['unit_kerja'] = UnitKerja::pluck('name', 'id');
        return view('referece.jabatan.create', compact('data'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', Rule::unique(Jabatan::getTableName())]
        ]);

        $storedData = Jabatan::create($validated);
        return redirect(route('jabatan.show', ['id' => $storedData->id]));
    }

    public function show($id)
    {
        $data['obj'] = Jabatan::findOrFail($id);
        return view('referece.jabatan.show', compact('data'));
    }

    public function delete($id)
    {
        Jabatan::findOrFail($id)->delete();
        FlashMessageHelper::alert('success', 'Berhasil Hapus Unit Kerja');
        return redirect(route('jabareferece.jabatan.index'));
    }

    public function edit($id)
    {
        $data['obj'] = Jabatan::findOrFail($id);
        return view('referece.jabatan.index.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data['obj'] = Jabatan::findOrFail($id);
        $validated = $request->validate([
            'name' => ['required', Rule::unique(Jabatan::getTableName())->ignore($data['obj'])]
        ]);

        $data['obj']->update($validated);

        FlashMessageHelper::alert('success', 'Berhasil Update Unit Kerja');

        return redirect(route('jabareferece.jabatan.show', ['id' => $id]));
    }
}
