<div class="iq-sidebar  sidebar-default">
    <div class="iq-sidebar-logo d-flex align-items-center">
        <a href="dashboard" class="header-logo">
            <img src="../assets/images/logo.jpeg" alt="logo">
            <h3 class="logo-title light-logo">Menu</h3>
        </a>
        <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="4">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu" data-parent="#iq-sidebar-toggle">
                <li class="">
                    <a href="{{ url('dashboard') }}" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span class="ml-4">Dashboards</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="#master_brg" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash16" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                        </svg>
                        <span class="ml-4">Master Barang</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="master_brg" class="iq-submenu collapse" data-parent="#otherpage">
                            <li class="">
                                <a href="{{ url('jenis') }}">
                                    <i class="las la-minus"></i><span>Jenis</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ url('satuan') }}">
                                    <i class="las la-minus"></i><span>Satuan</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ url('merk') }}">
                                    <i class="las la-minus"></i><span>Merk</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ url('barang') }}">
                                    <i class="las la-minus"></i><span>Barang</span>
                                </a>
                            </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#pelanggan" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span class="ml-4">Pelanggan</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="pelanggan" class="iq-submenu collapse" data-parent="#otherpage">
                        <li class="">
                            <a href="{{ url('pembeli') }}">
                                <i class="las la-minus"></i><span>Pembeli</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ url('penjual') }}">
                                 <i class="las la-minus"></i><span>Penjual</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#transaksi" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                        </svg>
                        <span class="ml-4">Transaksi</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="transaksi" class="iq-submenu collapse" data-parent="#otherpage">
                            <li class="">
                                <a href="{{ url('bm') }}">
                                    <i class="las la-minus"></i><span>Barang Masuk</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ url('bk') }}">
                                    <i class="las la-minus"></i><span>Barang Keluar</span>
                                </a>
                            </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#otherpage" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                            <rect x="6" y="14" width="12" height="8"></rect>
                        </svg>
                        <span class="ml-4">Laporan</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                        <ul id="otherpage" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="">
                                <a href="{{ url('laporan-masuk') }}">
                                    <i class="las la-minus"></i><span>Lap Barang Masuk</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ url('laporan-keluar') }}">
                                    <i class="las la-minus"></i><span>Lap Barang Keluar</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ url('laporan-stok') }}">
                                    <i class="las la-minus"></i><span>Lap Stok Barang</span>
                                </a>
                            </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#modalLogout" class="svg-icon" data-bs-effect="effect-super-scaled" data-bs-toggle="modal">
                        <svg class="svg-icon" id="h-05-p" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        <span class="ml-4">Keluar</span>
                    </a>
                </li>
            </ul>
        </nav>
        <li class="">
        </li>
        <div class="pt-5 pb-2"></div>
    </div>
</div>
