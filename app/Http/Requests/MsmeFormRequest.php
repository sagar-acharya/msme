<?php

namespace App\Http\Requests;

use App\Rules\AlphaNum;
use App\Rules\AlphaNumSpace;
use Illuminate\Foundation\Http\FormRequest;

class MsmeFormRequest extends FormRequest
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
        $rules = [
            'existing_aadhar_number' => 'required|integer|digits:12',
            'aadhar_number' => 'required|integer|digits:12',
            'entrepreneur_name' => ['required',new AlphaNumSpace,'max:255'],
            'gender' => 'required',
            'is_handicapped' => 'required',
            'business_name' => ['required',new AlphaNumSpace,'max:255'],
            'organization_type_id' => 'required',
            'pan_number' => ['required',new AlphaNumSpace,'max:255'],
            'house_number' => ['required',new AlphaNumSpace,'max:255'],
            'premise' => ['required',new AlphaNumSpace,'max:255'],
            'road' => ['required',new AlphaNumSpace,'max:255'],
            'area' => ['required',new AlphaNumSpace,'max:255'],
            'city' => ['required',new AlphaNumSpace,'max:255'],
            'pin' => 'required|integer|digits:6',
            'state_id' => 'required',
            'district' => ['required',new AlphaNumSpace,'max:255'],
            'is_office_address_same' => 'required',
            'mobile' => 'required|integer|digits:10',
            'email' => 'required|email|max:255',
            'commencement_date' => 'required',
            'bank_account_number' => 'required|integer|digits_between:10,20',
            'ifsc_code' => ['required',new AlphaNum,'max:10'],
            'business_activity_type' => 'required',
            'about_business' => ['required',new AlphaNumSpace,'max:255'],
            'employee_count' => 'required|integer',
            'investment_in_plant' => 'required|integer',
            'aadhar_image' => 'nullable|mimes:jpeg,pdf,png|max:5120',
            'gstin_number' => [new AlphaNumSpace,'max:255'],
            'is_gem' => 'required',
            'is_treds' => 'required',
            't_and_c' => 'required',
        ];

        if(request()->is_office_address_same == 'no') {
            $rules['house_number1'] = ['required',new AlphaNumSpace,'max:255'];
            $rules['premise1'] = ['required',new AlphaNumSpace,'max:255'];
            $rules['road1'] = ['required',new AlphaNumSpace,'max:255'];
            $rules['area1'] = ['required',new AlphaNumSpace,'max:255'];
            $rules['city1'] = ['required',new AlphaNumSpace,'max:255'];
            $rules['pin1'] = 'required|integer|digits:6';
            $rules['state_id1'] = 'required';
            $rules['district1'] = ['required',new AlphaNumSpace,'max:255'];
        }

        if(request()->business_activity_type == 'Manufacturer') {
            $rules['nic_code_id'] = 'required';
        } elseif(request()->business_activity_type == 'Service provider') {
            $rules['nic_code_id1'] = 'required';
        }

        return $rules;
    }
}
