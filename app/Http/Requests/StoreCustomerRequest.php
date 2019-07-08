<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_of_applicant'       => 'required|max:100',
            'fathers_name'            => 'required|max:100',
            'mothers_name'            => 'required|max:100',
            'spouses_name'            => 'nullable',
            'gender'                  => 'required',
            'nationality'             => 'required|max:50',
            'association_id_number'   => 'required|max:10',
            'permanent_address'       => 'required|max:200',
            'mobile_no1'              => 'required|max:10',
            'mobile_no2'              => 'nullable',
            'email_address '          => 'nullable',
            'member_number'           => 'required|max:10',
            'maritual_status'         => 'required|max:10',
            'date_of_birth'           => 'required',
            'stage_of_operation'      => 'required|max:50',
            'motor_cycle_no_plate'    => 'required|max:10',
            'closet_land_mark'        => 'required|max:50',
            'has_proof_of_address'    => 'required|max:1',
            'gross_weekly_income'     => 'required',
            'other_sources_of_income' => 'required|max:100',
        ];
    }
}
