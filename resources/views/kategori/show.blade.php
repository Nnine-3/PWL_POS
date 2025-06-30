@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <table class="table table-bordered table-striped table-hover table-sm">
            <tr>
                <th>ID</th>
                <td>{{ $kategori->kategori_id }}</td>
            </tr>
            <tr>
                <th>Kode Kategori</th>
                <td>{{ $kategori->kategori_kode }}</td>
            </tr>
            <tr>
                <th>Nama Kategori</th>
                <td>{{ $kategori->kategori_nama }}</td>
            </tr>
            <tr>
                <th>Tanggal Dibuat</th>
                <td>{{ $kategori->created_at }}</td>
            </tr>
            <tr>
                <th>Tanggal Diperbarui</th>
                <td>{{ $kategori->updated_at }}</td>
            </tr>
        </table>
        <a href="{{ url('kategori') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
    </div>
</div>
@endsection

@push('css')
@endpush

@push('js')
@endpush