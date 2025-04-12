<aside class="left-sidebar with-vertical">
    <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="/" class="text-nowrap logo-img">
            <img src="{{ asset('assets/images/logos/logo-dark.svg') }}" class="light-logo" alt="Logo-light" />
        </a>
        <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
            <i class="ti ti-x"></i>
        </a>
    </div>

    <div class="scroll-sidebar" data-simplebar>
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="mb-0">

                <!-- Home Section -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link primary-hover-bg" href="{{ route('dashboard') }}" aria-expanded="false">
                        <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                            <iconify-icon icon="solar:screencast-2-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Beranda</span>
                    </a>
                </li>
                <!-- End Home Section -->

                <!-- Master Section -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
                    <span class="hide-menu">Master</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow success-hover-bg" href="#" aria-expanded="false">
                        <span class="aside-icon p-2 bg-success-subtle rounded-1">
                            <iconify-icon icon="solar:wallet-money-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Akun Keuangan</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('master.account.create') }}" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Tambah Akun</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('master.account.index') }}" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Daftar Akun</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow warning-hover-bg" href="#" aria-expanded="false">
                        <span class="aside-icon p-2 bg-warning-subtle rounded-1">
                            <iconify-icon icon="solar:documents-minimalistic-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Kategori</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Tambah Kategori</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Semua Kategori</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow indigo-hover-bg" href="#" aria-expanded="false">
                        <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
                            <iconify-icon icon="solar:user-id-broken" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Payees</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Tambah Payee</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Daftar Payees</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow danger-hover-bg" href="#" aria-expanded="false">
                        <span class="aside-icon p-2 bg-danger-subtle rounded-1">
                            <iconify-icon icon="solar:tag-price-outline" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Tag & Label</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Tambah Tag</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Semua Tag</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End Master Section -->

                <!-- Transaction Records Section -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
                    <span class="hide-menu">Transaction Records</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow success-hover-bg" href="#" aria-expanded="false">
                        <span class="aside-icon p-2 bg-success-subtle rounded-1">
                            <iconify-icon icon="solar:wallet-money-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Transaksi</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Tambah Transaksi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Semua Transaksi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Rekonsiliasi Transaksi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Transaksi Berulang</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow warning-hover-bg" href="#" aria-expanded="false">
                        <span class="aside-icon p-2 bg-warning-subtle rounded-1">
                            <iconify-icon icon="solar:wallet-money-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Transfer Antar Akun</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Tambah Transfer</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Riwayat Transfer</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow indigo-hover-bg" href="#" aria-expanded="false">
                        <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
                            <iconify-icon icon="solar:wallet-money-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Lampiran</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Upload Lampiran</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Semua Lampiran</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End Transaction Records -->

                <!-- Money Management Section -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
                    <span class="hide-menu">Money Management</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow danger-hover-bg" href="#" aria-expanded="false">
                        <span class="aside-icon p-2 bg-danger-subtle rounded-1">
                            <iconify-icon icon="solar:wallet-money-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Budgeting</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Buat Anggaran</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Kategori Anggaran</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Ringkasan Anggaran</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow warning-hover-bg" href="#" aria-expanded="false">
                        <span class="aside-icon p-2 bg-warning-subtle rounded-1">
                            <iconify-icon icon="solar:wallet-money-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Tujuan Keuangan</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Buat Tujuan Baru</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Semua Tujuan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Progress Tujuan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End Money Management Section -->

                <!-- Setting Preferences Section -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
                    <span class="hide-menu">Settings Preference</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow success-hover-bg" href="#" aria-expanded="false">
                        <span class="aside-icon p-2 bg-success-subtle rounded-1">
                            <iconify-icon icon="solar:wallet-money-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Pengaturan</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Preferensi Mata Uang</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Profil Pengguna</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Backup & Restore Data</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow indigo-hover-bg" href="#" aria-expanded="false">
                        <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
                            <iconify-icon icon="solar:wallet-money-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu ps-1">Keamanan</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <span class="sidebar-icon"></span>
                                <span class="hide-menu">Ganti Password</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- End Setting Preferences Section -->

            </ul>
        </nav>
    </div>

    <div class=" fixed-profile mx-3 mt-3">
        <div class="card bg-primary-subtle mb-0 shadow-none">
            <div class="card-body p-4">
                <div class="d-flex align-items-center justify-content-between gap-3">
                    <div class="d-flex align-items-center gap-3">
                        <img src="{{ asset('assets/images/profile/user-1.jpg') }}" width="45" height="45"
                            class="img-fluid rounded-circle" alt="" />
                        <div>
                            <h5 class="mb-1">Mike</h5>
                            <p class="mb-0">Admin</p>
                        </div>
                    </div>
                    <a href="{{ route('auth.logout') }}" class="position-relative" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-title="Logout">
                        <iconify-icon icon="solar:logout-line-duotone" class="fs-8"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>
</aside>
