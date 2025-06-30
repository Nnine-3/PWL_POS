@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                {{-- Mengubah URL untuk menambah data kategori baru --}}
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('kategori/create') }}">Tambah</a>
            </div>
        </div>
        <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
            {{-- Mengubah id tabel untuk merefleksikan kategori --}}
            <table class="table table-bordered table-striped table-hover table-sm" id="table_kategori">
                <thead>
                    <tr>
                        <th>No</th>
                        {{-- Mengubah header kolom --}}
                        <th>Kode Kategori</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    @endsection

    @push('css')
    @endpush

    @push('js')
    <script>
        $(document).ready(function() {
            // Mengubah nama variabel DataTable
            var dataKategori = $('#table_kategori').DataTable({
                serverSide: true,   // serverSide: true, jika ingin menggunakan server side processing
                ajax: {
                    // Mengubah URL untuk mengambil data list kategori
                    "url": "{{ url('kategori/list') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data": function (d) {
                        // Menyesuaikan parameter jika ada filter
                        d.kategori_id = $('#kategori_id').val();
                    }
                },
                columns: [
                    {
                        data: "DT_RowIndex", // nomor urut dari serverSide
                        className: "text-center",
                        orderable: false,
                        searchable: false
                    },
                    {
                        // Mengubah data menjadi 'kategori_kode'
                        data: "kategori_kode",
                        className: "",
                        orderable: true,    // orderable: true, jika ingin kolom ini bisa diurutkan
                        searchable: true    // searchable: true, jika ingin kolom ini bisa dicari
                    },
                    {
                        // Mengubah data menjadi 'kategori_nama'
                        data: "kategori_nama",
                        className: "",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "aksi",
                        className: "",
                        orderable: false,   // orderable: false, jika ingin kolom ini tidak bisa diurutkan
                        searchable: false   // searchable: false, jika ingin kolom ini tidak bisa dicari
                    }
                ]
            });
        });
    </script>
@endpush