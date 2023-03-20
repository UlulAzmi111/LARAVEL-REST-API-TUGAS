<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreOrderDetailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'idpelanggan' => ['required', 'numeric'],
            'pelanggan' => ['required', 'min:3', 'max:20'],
            'alamat' => ['required', 'min:3', 'max:20'],
            'telp' => ['required', 'numeric'],
            'idbarang' => ['required', 'numeric'],
            'title' => ['required', 'min:3', 'max:20'],
            'category' => ['required', 'min:3', 'max:20'],
            'price' => ['required', 'numeric'],
            'stock' => ['required', 'numeric']
        ];
    }
}
