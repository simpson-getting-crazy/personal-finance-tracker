<?php

namespace App\Http\Controllers\Master;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Master\Account\CreateAccountRequest;

class AccountController extends Controller
{
    /**
     * @var \Illuminate\Database\Eloquent\Builder
     */
    protected $defaultAccountQueries;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->defaultAccountQueries = Account::query()
            ->where('user_id', Auth::id())
            ->orderBy('name', 'asc')
            ->paginate();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('master.account.index', [
            'accounts' => $this->defaultAccountQueries,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create(): View
    {
        return view('master.account.form', [
            'accounts' => $this->defaultAccountQueries,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateAccountRequest $request): RedirectResponse
    {
        Account::create($request->DTO());

        return redirect()
            ->back()
            ->with('toastSuccess', 'Account Successfully Added!');
    }
}
