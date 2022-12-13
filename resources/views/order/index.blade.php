@extends('admin.admin_master')
@section('title')
Order
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
                                <h4 class="mb-sm-0">Order</h4>
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
                            <a class="btn btn-primary waves-effect waves-light" href="{{ route('order.create')}}" role="button"> Create (+)</a>
                            </p>
                            </div>

                            <!-- fungsi cart -->
                            <form method="get" action="{{route('order.index')}}">
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
                                                            <th>id user</th>
                                                            {{-- <th>id produk</th> --}}
                                                            <th>jumlah produk</th>
                                                            <th>total bayar</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($order as $row)
                        <tr>
                            <td>{{ $loop->iteration + ($order->perpage() *  ($order->currentPage() -1)) }}</td>
                            <td>{{ $row->id_user }}</td>
                            {{-- <td>{{ $row->id_produk }}</td> --}}
                            <td>{{ $row->jumlah_produk }}</td>
                            <td>{{ $row->total_bayar }}</td>

                            <td>
                            <form action="{{ url('order/'.$row->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('order.edit',[$row->id]) }}" title="Edit">
                                 <i class="fas fa-pencil-alt"></i>
                                 </a>

                                 <button type="submit"  class="btn btn-outline-secondary btn-sm edit">
                                    <i class="fas fa-trash-alt"></i>
                                </button>

                                <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('order.show',[$row->id]) }}" title="Lihat">
                                <i class="fas fa-eye"></i>
                                 </a>
                            </td>
                        </tr>
                    </form>
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
