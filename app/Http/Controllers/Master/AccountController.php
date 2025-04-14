<?php

namespace App\Http\Controllers\Master;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Master\Account\CreateAccountRequest;
use App\Http\Requests\Master\Account\UpdateAccountRequest;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
            'action' => 'store',
            'actionUrl' => route('master.account.store'),
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

    /**
     * Display the specified resource.
     *
     * @param string $uuid
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function show(string $uuid): View|RedirectResponse
    {
        try {
            $account = Account::query()->where('uuid', $uuid)->firstOrFail();

            return view('master.account.form', [
                'action' => 'show',
                'account' => $account,
                'accounts' => $this->defaultAccountQueries,
            ]);
        } catch (ModelNotFoundException $ex) {
            return redirect()
                ->route('master.account.index')
                ->with('toastError', 'Account Not Found!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param string $uuid
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edit(string $uuid): View|RedirectResponse
    {
        try {
            $account = Account::query()->where('uuid', $uuid)->firstOrFail();

            return view('master.account.form', [
                'action' => 'update',
                'actionUrl' => route('master.account.update', $uuid),
                'account' => $account,
                'accounts' => $this->defaultAccountQueries,
            ]);
        } catch (ModelNotFoundException $ex) {
            return redirect()
                ->route('master.account.index')
                ->with('toastError', 'Account Not Found!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Master\Account\UpdateAccountRequest $request
     * @param string $uuid
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateAccountRequest $request, string $uuid): RedirectResponse
    {
        try {
            $account = Account::query()->where('uuid', $uuid)->firstOrFail();
            $account->update($request->DTO());

            return redirect()
                ->back()
                ->with('toastSuccess', 'Account Successfully Updated!');

        } catch (Exception $ex) {
            return redirect()
                ->route('master.account.index')
                ->with('toastError', 'Account Not Found!');
        }
    }

    public function destroy(string $uuid): RedirectResponse
    {
        try {
            $account = Account::query()->where('uuid', $uuid)->firstOrFail();
            $account->delete();

            return redirect()
                ->route('master.account.index')
                ->with('toastSuccess', 'Account Successfully Deleted!');

        } catch (ModelNotFoundException $ex) {
            return redirect()
                ->route('master.account.index')
                ->with('toastError', 'Account Not Found!');
        }
    }
}
