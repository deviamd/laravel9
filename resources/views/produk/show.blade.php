@extends('admin.admin_master')
@section('title')
Data Produk
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
                                    <h4 class="mb-sm-0">Data Produk</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>

                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Tabel Produk</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                            <tr>
                       <td>Kode Produk</td>

                       <td>{{ $produk->id }}</td>
                   </tr>
                   <tr>
                       <td>Nama</td>

                       <td>{{ $produk->nama_produk }}</td>
                   </tr>
                   <td>Kategori</td>

                       <td>{{ $produk->kategori }}</td>
                   </tr>

                   <tr>
                       <td>Harga</td>

                       <td>{{ $produk->harga}}</td>
                   </tr>

                   <tr>
                    <td>Stok</td>

                    <td>{{ $produk->stok}}</td>
                </tr>


                                            </table>
                                            <a class="btn btn-primary waves-effect waves-light" href="/produk" role="button">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
</div>
@endsection
