@extends('admin.admin_master')
@section('title')
Produk
@endsection

<!-- ini untuk isi home -->
@section('admin')
<div  id="layoutSidenav_content">
    <main>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
        <div class="col-xl-8">
                <div class="card">
                <div class="card-body">
                <h4 class="card-title">Edit Produk</h4>


                                        <form class="custom-validation" method="POST" action="{{ route('produk.update',[$produk->id]) }}" novalidate="">
                                            @csrf
                                            {{ method_field('PUT') }}


                                            <div class="mb-3">
                                                <label>Nama</label>
                                                <input type="text" name="nama_produk" class="form-control" required="" value="{{ $produk->nama_produk }}">
                                            </div>
                                            {{-- <div class="mb-3">
                                                <label>Kategori</label>
                                                <input type="text" name="kategori" class="form-control" required="" value="{{ $produk->kategori }}">
                                            </div> --}}
                                            <div class="mb-3">
                                                <div class="name">Kategori</div>
                                                <div class="value">
                                                    <select name="kategori" class="form-control">
                                                        <option value="opt1">Pilih Kategori</option>
                                                        <option value="1">Classic</option>
                                                        <option value="2">Standar</option>
                                                        <option value="3">Premium</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Harga</label>
                                                <input type="text" name="harga" class="form-control" required="" value="{{ $produk->harga }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>Stok</label>
                                                <input type="text" name="stok" class="form-control" required="" value="{{ $produk->stok }}">
                                            </div>

                                            <div class="mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                       Edit
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    </div> <!-- container-fluid -->
    </div> <!-- page-content -->
    </div> <!-- main-content -->
@endsection
