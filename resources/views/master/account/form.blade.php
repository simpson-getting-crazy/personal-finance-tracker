@extends('layout.app')

@section('content')
    <div class="card shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body d-flex align-items-center justify-content-between p-4">
            <h4 class="fw-semibold mb-0">Tambah Akun</h4>
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

    <div class="card">
        <div class="card-body">
            <h5 class="mb-3">Formulir Akun Keuangan</h5>
            <form action="{{ $actionUrl ?? '#' }}" method="POST">
                @csrf
                @if ($action == 'update') @method('PUT') @endif
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <x:form.input-label for="name" required>Nama Akun</x:form.input-label>
                            <x:form.text-input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Masukkan Nama Akun"
                                value="{{ old('name', @$account->name) }}"
                                :disabled="$action == 'show'"
                                required />
                            @error('name')
                                <x:form.input-error :messages="$message" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <x:form.input-label for="type" required>Tipe Akun</x:form.input-label>
                            <x:form.select-input id="type" name="type" :disabled="$action == 'show'" required>
                                <option value="" selected hidden>Pilih Tipe Akun</option>
                                @foreach (['checking', 'savings', 'credit', 'investment'] as $type)
                                    <option value="{{ $type }}" @selected(old('type', @$account->type) == $type)>{{ Str::title($type) }}</option>
                                @endforeach
                            </x:form.select-input>
                            @error('type')
                                <x:form.input-error :messages="$message" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <x:form.input-label for="initial_balance" required>Saldo Awal</x:form.input-label>
                            <x:form.currency-input
                                id="initial_balance"
                                name="initial_balance"
                                placeholder="Masukkan Nominal Saldo Awal"
                                min="0"
                                value="{{ old('initial_balance', @$account->initial_balance) }}"
                                :disabled="$action == 'show'"
                                required />
                            @error('initial_balance')
                                <x:form.input-error :messages="$message" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <x:form.input-label for="currency" required>Mata Uang</x:form.input-label>
                            <x:form.select-input id="currency" name="currency" :disabled="$action == 'show'" required>
                                <option value="" selected hidden>Pilih Mata Uang</option>
                                @foreach (\App\Constants\Currency::COLLECTS as $currency)
                                    <option value="{{ Str::lower($currency) }}" @selected(old('currency', @$account->currency) == Str::lower($currency))>{{ $currency }}</option>
                                @endforeach
                            </x:form.select-input>
                            @error('currency')
                                <x:form.input-error :messages="$message" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <x:form.input-label for="note">Catatan</x:form.input-label>
                            <x:form.textarea-input
                                id="note"
                                name="note"
                                rows="3"
                                :disabled="$action == 'show'">
                                {{ old('note', @$account->note) }}
                            </x:form.textarea-input>
                            @error('note')
                                <x:form.input-error :messages="$message" />
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-md-flex align-items-center">
                            <div class="ms-auto mt-3 mt-md-0">
                                @if ($action != 'store')
                                    <a href="{{ route('master.account.index') }}" class="btn btn-danger rounded-pill px-4 me-2">
                                        <i class="ti ti-arrow-left me-2 fs-4"></i>
                                        Kembali
                                    </a>
                                @endif
                                <button type="submit" class="btn btn-primary rounded-pill px-4" {{ $action == 'show' ? 'disabled' : '' }}>
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-send me-2 fs-4"></i>
                                        Submit
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="d-md-flex justify-content-between mb-9">
                        <div class="mb-9 mb-md-0">
                            <h5 class="card-title">Data Akun Keuangan</h5>
                            <p class="card-subtitle mb-0">Daftar Akun Keuangan Anda</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <form class="position-relative me-3 w-100">
                                <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
                                    placeholder="Search">
                                <i
                                    class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                            </form>
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
                                @foreach ($accounts as $rowAccount)
                                    <tr>
                                        <td>
                                            <p class="mb-0">{{ $rowAccount->name }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">{{ $rowAccount->type }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">{{ 'Rp. ' . number_format($rowAccount->initial_balance, 0, ',', '.') }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">{{ 'Rp. ' . number_format($rowAccount->balance, 0, ',', '.') }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0">{{ Str::upper($rowAccount->currency) }}</p>
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
                                                            href="{{ route('master.account.show', $rowAccount->uuid) }}"><i class="fs-4 ti ti-eye"></i>Detail</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-3"
                                                            href="{{ route('master.account.edit', $rowAccount->uuid) }}"><i class="fs-4 ti ti-edit"></i>Edit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-3 btn-delete"
                                                            href="{{ route('master.account.destroy', $rowAccount->uuid) }}"
                                                            data-redirect-url="{{ route('master.account.index') }}">
                                                            <i class="fs-4 ti ti-trash"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
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
