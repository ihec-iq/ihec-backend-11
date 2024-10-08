<?php

namespace App\Http\Requests\Bonus;

use Illuminate\Foundation\Http\FormRequest;

class BonusStoreRequest extends FormRequest
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
            'title' => 'nullable|string',
            'employee_id' => 'required|exists:employees,id',
            'bonus_degree_stage_id' => 'required|exists:bonus_degree_stages,id',
            'bonus_study_id' => 'required|exists:bonus_studies,id',
            'bonus_job_title_id' => 'required|exists:bonus_job_titles,id',
            'number_last_bounues' => 'required|string',
            'issue_date' => 'required|date',
            'date_last_bounues' => 'required|date',
            'date_last_worth' => 'required|date',
            'date_next_worth' => 'required|date',
        ];
    }
}
