@extends('layouts.master')

@section('page-title', 'Edit Unit Kerja')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('unit_kerja.update', ['id' => $data['obj']->id]) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Nama Unit Kerja" value="{{ $data['obj']->name }}">
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
