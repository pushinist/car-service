<?php

namespace App\Http\Requests\Orders;

use App\Rules\Mechanic\MechanicOrderLimit;
use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'car_id' => 'required|exists:cars,id',
            'client_id' => 'required|exists:clients,id',
            'mechanic_id' => ['required', 'exists:mechanics,id', new MechanicOrderLimit(3)],
            'planned_completion_time' => 'required|date|after_or_equal:today',
            'description' => 'required|string|max:255',
            'work_to_do' => 'required|string|max:255',
            'parts' => 'nullable|array',
            'parts.*' => 'exists:parts,id',
        ];
    }
}
