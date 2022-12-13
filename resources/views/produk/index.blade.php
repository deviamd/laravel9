@extends('admin.admin_master')
@section('title')
Produk
@endsection

<!-- ini untuk isi home -->
@section('admin')
{{-- <div  id="layoutSidenav_content">
    <main>
        <div class="main-content"> --}}
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Produk</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- end page title -->
                    <div>
                        <a class="btn btn-primary waves-effect waves-light mt-2 mb-4" href="{{ route('produk.create')}}" role="button"> Create (+)</a>
                        <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tabel Produk</h4>
                                    <div class="table-responsive">
                                        <table class="table table-editable table-nowrap align-middle table-edits">
                                            <thead>
                                                <tr style="cursor: pointer;">
                                                    <th>Id Produk</th>
                                                    <th>Nama</th>
                                                    <th>Kategori</th>
                                                    <th>Harga</th>
                                                    <th>Stok</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($produk as $row)
                                                <tr>
                                                    <td>{{ $row->id }}</td>
                                                    <td>{{ $row->nama_produk }}</td>
                                                    <td>{{ $row->kategori }}</td>
                                                    <td>{{ $row->harga }}</td>
                                                    <td>{{ $row->stok }}</td>

                                                    <td>
                                                    <form method="post" action="{{ route('produk.destroy',[$row->id]) }}" onsubmit="return confirm('Apakah anda yakin akan menghapus, {{$row->name}}?')">

                                                    {{-- <form method="post" action="{{ route('produk.destroy',[$row->id]) }}" onsubmit="return confirm('Apakah anda yakin akan menghapus, {{$row->name}}?')"> --}}
                                                        @csrf
                                                    {{ method_field('DELETE') }}
                                                        <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('produk.edit',[$row->id]) }}" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <button type="submit" class="btn btn-outline-secondary btn-sm edit">
                                                        <i class="fas fa-trash-alt"></i></button>
                                                        <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('produk.show',[$row->id]) }}" title="Lihat">
                                                        <i class="fas fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                                        {{-- {{ $produk->appends(Request::all()->links() }} --}}
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div> <!-- container-fluid -->
            </div>
        {{-- </div>
    </main>
</div> --}}
@endsection
