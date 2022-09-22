@extends('layouts.master')

@section('page-title', 'Unit Kerja')

@push('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
@endpush

@section('content')
    <div class="row mb-3">
        <div class="col-md-12">
            <a class="btn btn-primary" href="{{ route('jabatan.create') }}"><i class="fa fa-plus" aria-hidden="true"></i>
                Tambah</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped" id="main-table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
@endpush
@push('scripts')
    <script>
        $(document).ready(function() {
            $("#main-table").DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": '{{ route('jabatan.datatables') }}',
                "columns": [{
                        "data": "name"
                    },
                    {
                        "data": "action",
                        "orderable": false,
                        "sotrable": false,
                        "searchable": false
                    }
                ]
            })
        });
    </script>
@endpush
