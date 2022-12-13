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

                        <h4 class="card-title">Produk</h4>
                        <form class="custom-validation" method="POST" action="{{ route('produk.store') }}" novalidate="">
                            @csrf
                            @if ($errors->any())
            <div class="alert alert-danger">
             <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
             </ul>
            </div>
            @endif



                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" name="nama_produk" class="form-control" required="" placeholder="Silahkan input nama produk">
                            </div>
                            {{-- <div class="mb-3">
                                <label>Kategori</label>
                                <input type="text" name="kategori" class="form-control" required="" placeholder="Silahkan input kategoti">
                            </div> --}}
                            <div class="mb-3">
                                <div class="name">Kategori</div>
                                <div class="value">
                                    <select name="kategori" class="form-control">
                                        <option value="opt1">Pilih Kategori</option>
                                        <option value="1">Classic</option>
                                        <option value="2">Standar</option>
                                        <option value="2">Premium</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Harga</label>
                                <input type="text" name="harga" class="form-control" required="" placeholder="Silahkan input harga">
                            </div>
                            <div class="mb-3">
                                <label>Stok</label>
                                <input type="text" name="stok" class="form-control" required="" placeholder="Silahkan input stok">
                            </div>

                            </div>
                            </div>
                            <div class="mb-0">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                        Tambah
                                    </button>
                                     <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                     </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div> <!-- container-fluid -->
            </div>
        </div> <!-- page-content -->
    </div> <!-- main-content -->
</div>
@endsection
Footer
© 2022 GitHub, Inc.
Footer navigation
Terms
Privacy
