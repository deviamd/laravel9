@extends('admin.admin_master')
@section('title')
Transaksi
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
                        <h4 class="card-title">Transaksi</h4>
                        <form class="custom-validation" method="POST" action="{{ route('transaksi.store') }}" novalidate="">
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

                            <div class="form-row">
                                <div class="name">Jenis Pembayaran</div>
                                <div class="value">
                                    <select name="jenis_pmbyr" class="form-control">
                                        <option value="opt1">Pilih Jenis Pembayaran</option>
                                        <option value="1">Debit</option>
                                        <option value="2">Cod</option>
                                    </select>
                                </div>
                            </div>
                                <div class="form-row">
                                    <div class="row-12">
                                        <div class="mb-3">
                                            <label>Tanggal</label>
                                            <input type="date" name="tanggal" class="form-control" required="" placeholder="Silahkan input nama tanggal pembayaran">

                                            <label>produk</label>
                                           <select class="form-select" aria-label="Default select example" name="id" required>
                                            @foreach ($produk as $data)
                                               <option value="{{ $data->id }}">{{ $data->nama_produk }}</option>
                                            @endforeach
                                      </select>
                                      <label>nama yang order</label>
                                      <select class="form-select" aria-label="Default select example" name="id_orders" required>
                                        @foreach ($order as $data)
                                           <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                  </select>

                                        </div>
                                        <div class="mb-3">
                                            <label>Total Bayar</label>
                                            <input type="text" name="total_bayar" class="form-control" required="" placeholder="Silahkan input total">
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
