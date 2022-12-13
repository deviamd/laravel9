@extends('admin.admin_master')
@section('title')
Data Order
@endsection

<!-- ini untuk isi home -->
@section('admin')
<div  id="layoutSidenav_content">
    <main>
{{-- <div class="main-content"> --}}
<div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-20">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Data Order</h4>

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

                                        <h4 class="card-title">Tabel Order</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                            <tr>
                       <td>Id Order</td>
                       <td>{{ $order->id_order }}</td>
                    </tr>
                    <tr>
                        <td>Id user</td>

                        <td>{{ $order->id_user }}</td>
                    </tr>
                    {{-- <tr>
                        <td>Id Produk</td>

                        <td>{{ $order->produk }}</td>
                    </tr> --}}
                    <tr>
                        <td>Jumlah Produk</td>

                        <td>{{ $order->jumlah_produk }}</td>
                    </tr>
                    <tr>
                        <td>Total Bayar</td>

                        <td>{{ $order->total_bayar }}</td>
                    </tr>
                          </table>
                                            <a class="btn btn-primary waves-effect waves-light" href="/order" role="button">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
</div>
@endsection
