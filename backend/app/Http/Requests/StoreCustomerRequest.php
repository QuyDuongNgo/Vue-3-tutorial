<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = $this->user();

        return $user != null && $user->tokenCan('customer:create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'type' => ['required',Rule::in(['I', 'B', 'i', 'b'])],
            'email' => ['required', 'email'],
            'address' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'postal_code' => ['required'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'postal_code' => $this->postal_code,
        ]);
    }
}
