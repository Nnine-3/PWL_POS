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
                <td>{{ $barang->barang_id }}</td>
            </tr>
            <tr>
                <th>Kategori Barang</th>
                <td>{{ $barang->kategori->kategori_nama }}</td>
            </tr>
            <tr>
                <th>Kode Barang</th>
                <td>{{ $barang->barang_kode }}</td>
            </tr>
            <tr>
                <th>Nama Barang</th>
                <td>{{ $barang->barang_nama }}</td>
            </tr>
            <tr>
                <th>Harga Beli</th>
                <td>{{ number_format($barang->harga_beli, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th>Harga Jual</th>
                <td>{{ number_format($barang->harga_jual, 0, ',', '.') }}</td>
            </tr>
             <tr>
                <th>Tanggal Dibuat</th>
                <td>{{ $barang->created_at }}</td>
            </tr>
            <tr>
                <th>Tanggal Diperbarui</th>
                <td>{{ $barang->updated_at }}</td>
            </tr>
        </table>
        <a href="{{ url('barang') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
    </div>
</div>
@endsection

@push('css')
@endpush

@push('js')
@endpush