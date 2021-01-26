@extends('_layouts.app')

@section('title', 'Sampah Tipe')

@section('content-header')
<div class="col-sm-6">
    <h1 class="m-0 text-dark">Sampah Tipe</h1>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active">Sampah Tipe</li>
    </ol>
</div>
@endsection

@section('content')
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible">
    <span>{{ session('success' )}}</span>
    <button class="close" data-dismiss="alert">&times;</button>
</div>
@endif

<div id="alert"></div>

<div class="card shadow">
    <div class="card-header py-2 d-flex">
        <h2 class="h6 p-2 m-0 font-weight-bold text-dark">Data Sampah Tipe</h2>
        <div class="p-2 ml-auto">
            <button class="btn btn-sm btn-success shadow">Pulihkan Semua</button>
            <button class="btn btn-sm btn-danger shadow">Hapus Semua</button>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}">
@endpush

@push('js')
<script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script>
    const ajaxUrl = '{{ route('type.trash.datatables') }}'
    const restoreUrl = '{{ route('type.trash.restore', ':id') }}'
    const removeUrl = '{{ route('type.trash.remove', ':id') }}'
    const csrf = '{{ csrf_token() }}'

</script>

<script src="{{ asset('js/trash/type.js') }}"></script>
@endpush