@extends('admin.admin_master')
@section('title')
Order
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
                                        {{-- @include('alert.eror') --}}
                        <h4 class="card-title">Order</h4>
                        <form class="custom-validation" method="POST" action="{{ route('order.store') }}" novalidate="">
                            @csrf
                            <h2 class="text-center">Tambah Order</h2>
                            <form class="custom-validation" action="{{ route('order.store') }}" method="POST"  novalidate="">
                                @csrf


                                    <div class="form-row">
                                        <div class="name">Jumlah Produk</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input type="text" name="jumlah_produk" class="form-control" required="" placeholder="masukan jumlah produk">
                                                <input type="hidden" name="id_user" value="{{  Auth::user()->id }}" class="form-control" required="" placeholder="">
                                                <input type="hidden" name="id_produk" value="" class="form-control" required="" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Total Bayar</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input type="text" name="total_bayar" class="form-control" required="" placeholder="masukan total bayar">
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
