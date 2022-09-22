@extends('layouts.master')

@section('page-title', 'Tambah Unit Kerja')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('jabatan.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Nama Unit Kerja">
                        </div>
                        <div class="form-group">
                            <label for="name">Unit Kerja</label>
                            <select name="id_unit_kerja" id="" class="form-control">
                                <option value="">Pilih</option>
                                @foreach ($data['unit_kerja'] as $k => $v)
                                    <option value="{{ $k }}">{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
