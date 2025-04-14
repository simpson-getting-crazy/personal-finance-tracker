<?php

namespace App\Http\Requests\Master\Account;

use App\Constants\Currency;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class CreateAccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'in:checking,savings,credit,investment'],
            'initial_balance' => ['required', 'regex:/^[.\d]+$/'],
            'currency' => ['required', 'in:' . Str::lower(implode(',', Currency::COLLECTS))],
            'note' => ['nullable']
        ];
    }

    /**
     * Prepare the validated request data as a Data Transfer Object (DTO).
     *
     * @return array
     */
    public function DTO(): array
    {
        $data = $this->validated();
        $data['user_id'] = Auth::id();
        $data['initial_balance'] = doubleval(str_replace('.', '', $data['initial_balance']));
        $data['balance'] = $data['initial_balance'];

        return $data;
    }
}
