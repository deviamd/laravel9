<div class="vertical-menu">

    <div data-simplebar class="h-100">
        @php
        $id = Auth::user()->id;
        $admindata = App\Models\User::find($id);
        @endphp
        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img class="rounded-circle header-profile-user" src="{{ (!empty($admindata->profile_image))? url('upload/admin_images/'.$admindata->profile_image):url('upload/no_image.png') }}" alt=""
                    class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{$admindata->username}}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>
                    Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">


                <li>
                    <a href="/dashboard" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">1</span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/user" class="waves-effect">
                        <i class=" ri-team-fill"></i>
                        <span>User</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="/pembeli" class="waves-effect">
                        <i class="ri-user-line"></i><span class="badge rounded-pill bg-success float-end">2</span>
                        <span>Pembeli</span>
                    </a>
                </li> --}}
                <li>
                    <a href="/produk" class="waves-effect">
                        <i class="ri-shopping-basket-2-line"></i>
                        <span>Produk</span>
                    </a>
                </li>
                <li>
                    <a href="/order" class="waves-effect">
                        <i class=" ri-shopping-bag-3-fill"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Orders</span>
                    </a>
                </li>
                <li>
                    <a href="/transaksi" class="waves-effect">
                        <i class=" ri-money-dollar-box-line"></i><span class="badge rounded-pill bg-success float-end">1</span>
                        <span>Transaksi</span>
                    </a>
                </li>
                {{-- <li> --}}
                    {{-- <a href="index.html" class="waves-effect">
                        <i class=" ri-file-paper-fill"></i><span class="badge rounded-pill bg-success float-end">1</span>
                        <span>Laporan</span>
                    </a>
                </li> --}}

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
