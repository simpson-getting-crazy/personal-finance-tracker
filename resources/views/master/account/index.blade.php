@extends('layout.app')

@section('content')
    <div class="card shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body d-flex align-items-center justify-content-between p-4">
            <h4 class="fw-semibold mb-0">Daftar Akun</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="#">Master</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Akun Keuangan</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        @foreach ($accounts as $account)
            <div class="col-md-6 col-sm-12 mb-3">
                <a href="#">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div
                                    class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center {{ $account->color }}">
                                    <i class="ti ti-credit-card fs-6"></i>
                                </div>
                                <div class="ms-3 align-self-center">
                                    <h4 class="mb-0 fs-5">Total {{ Str::title($account->name) }}</h4>
                                    <span class="text-muted">{{ Str::title($account->name) }}</span>
                                </div>
                                <div class="ms-auto align-self-center">
                                    <h2 class="fs-7 mb-0">{{ 'Rp. ' . indonesianCurrencyFormat($account->balance) }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
