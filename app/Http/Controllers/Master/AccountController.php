<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Master\Account\CreateAccountRequest;
use App\Models\Account;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(): View
    {
        return view('master.account.index');
    }

    public function create(): View
    {
        return view('master.account.form');
    }

    public function store(CreateAccountRequest $request): RedirectResponse
    {
        Account::create($request->DTOs());

        return redirect()
            ->back()
            ->with('success', 'Account Successfully Added!');
    }
}
