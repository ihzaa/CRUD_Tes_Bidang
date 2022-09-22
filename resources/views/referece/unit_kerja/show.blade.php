@extends('layouts.master')

@section('page-title', 'Detail Unit Kerja')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Detail</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <td>{{ $data['obj']->name }}</td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{ $data['obj']->created_at }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3>Aksi</h3>
                </div>
                <div class="card-body">
                    <a class="btn btn-success mb-2" href="{{ route('unit_kerja.edit', ['id' => $data['obj']->id]) }}"><i
                            class="fas fa-edit"></i></a>
                    <form action="{{ route('unit_kerja.delete', ['id' => $data['obj']->id]) }}"
                        onsubmit="return confirm('Yakin hapus?')" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
