<?php

namespace App\Http\Requests\Cars;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|digits:4|min:1900|max:' . date('Y'),
            'vin' => 'required|string|size:17|unique:cars,vin',
            'govern_number' => 'required|string|max:20|unique:cars,govern_number',
            'mileage' => 'required|integer|min:0',
            'client_id' => 'required|exists:clients,id',
        ];
    }
}
