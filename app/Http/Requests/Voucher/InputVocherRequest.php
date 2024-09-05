<?php

namespace App\Http\Requests\Voucher;

use Illuminate\Foundation\Http\FormRequest;

class InputVocherRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'inputVoucherStateId' => 'integer |exists:input_voucher_states,id',
            'number' => 'integer',
            'date' => 'date',
            'notes' => 'string',
            'employeeRequestId' => 'exists:employees,id',
            'signaturePerson' => 'string',
        ];
    }
}
