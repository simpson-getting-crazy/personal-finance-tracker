@extends('layout.app')

@section('content')
    <div class="card shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body d-flex align-items-center justify-content-between p-4">
            <h4 class="fw-semibold mb-0">List Kategori</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="#">Master</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Kategori</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="d-md-flex justify-content-between mb-9">
                        <div class="mb-9 mb-md-0">
                            <h5 class="card-title">Data Kategori</h5>
                            <p class="card-subtitle mb-0">Daftar Kategori Anda</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <form class="position-relative me-3 w-100">
                                <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
                                    placeholder="Search">
                                <i
                                    class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                            </form>
                            <div class="dropdown">
                                <a href="#" class="btn border shadow-none px-3" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical fs-5"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                                class="fs-4 ti ti-plus"></i>Add</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive overflow-x-auto latest-reviews-table">
                        <table class="table mb-0 align-middle text-nowrap">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th>Nama Akun</th>
                                    <th>Tipe Akun</th>
                                    <th>Saldo Awal</th>
                                    <th>Sisa Saldo</th>
                                    <th>Mata Uang</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="mb-0">{{ '-' }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">{{ '-' }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">
                                            {{ 'Rp. ' }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">
                                            {{ 'Rp. ' }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">{{ '-' }}</p>
                                    </td>
                                    <td>
                                        <div class="dropdown dropstart">
                                            <a href="#" class="text-muted " id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-3"
                                                        href="#"><i class="fs-4 ti ti-eye"></i>Detail</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-3"
                                                        href="#"><i class="fs-4 ti ti-edit"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-3 btn-delete"
                                                        href="#">
                                                        <i class="fs-4 ti ti-trash"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-10">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination mb-0 align-items-center">
                                <li class="page-item"><a
                                        class="page-link border-0 d-flex align-items-center text-muted fw-normal"
                                        href="#"><iconify-icon icon="solar:alt-arrow-left-line-duotone"
                                            class="fs-5"></iconify-icon>Previous</a></li>
                                <li class="page-item"><a class="page-link border-0 d-flex align-items-center fw-normal"
                                        href="#">Next<iconify-icon icon="solar:alt-arrow-right-line-duotone"
                                            class="fs-5"></iconify-icon></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
