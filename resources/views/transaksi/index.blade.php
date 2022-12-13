@extends('admin.admin_master')
@section('title')
Transaksi
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
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Transaksi</h4>
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
                            <a class="btn btn-primary waves-effect waves-light" href="{{ route('transaksi.create')}}" role="button"> Create (+)</a>
                            <a class="btn btn-danger waves-effect waves-light" href="/pdf" role="button"> laporan pdf</a>
                            </p>
                            </div>




                            <!-- fungsi cart -->
                            <form method="get" action="{{route('transaksi.index')}}">
                                <div class="form-group">
                            </form>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Tabel</h4>


                                            <div class="table-responsive">
                                                <table class="table table-editable table-nowrap align-middle table-edits">
                                                    <thead>
                                                        <tr style="cursor: pointer;">
                                                            <th>Id</th>
                                                            <th>Nama Produk</th>
                                                            <th>Id Order</th>
                                                            <th>Jenis Pembayaran</th>
                                                            <th>Tanggal</th>
                                                            <th>Total Bayar</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($transaksi as $row)
                        <tr>
                            <td>{{ $loop->iteration + ($transaksi->perpage() *  ($transaksi->currentPage() -1)) }}</td>
                            <td>{{ $row->produk->nama_produk}}</td>
                            <td>{{ $row->order->id}}</td>
                            <td>{{ $row->jenis_pmbayaran }}</td>
                            <td>{{ $row->tanggal}}</td>
                            <td>{{ $row->total_bayar}}</td>
                            <td>
                                                    <form method="post" action="{{ route('transaksi.destroy',[$row->id]) }}" onsubmit="return confirm('Apakah anda yakin akan menghapus, {{$row->name}}?')">
                                                        @csrf
                                                    {{ method_field('DELETE') }}
                                                    {{-- <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('transaksi.edit',[$row->id]) }}" title="Edit"> --}}
                                                        {{-- <i class="fas fa-pencil-alt"></i> --}}
                                                        </a>
                                                        <button type="submit" class="btn btn-outline-secondary btn-sm edit">
                                                        <i class="fas fa-trash-alt"></i></button>
                                                        <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('transaksi.show',[$row->id]) }}" title="Lihat">
                                                        <i class="fas fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div> <!-- container-fluid -->
            </div>
        </div>
    </main>
</div>
@endsection
