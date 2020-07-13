<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AadharRegistration extends Model
{
    protected $fillable = [
        'aadhar_number', 'entrepreneur_name', 'social_category_id',
        'gender', 'is_handicapped', 'business_name',
        'organization_type_id', 'pan_number', 'mobile',
        'email', 'commencement_date', 'bank_account_number',
        'ifsc_code', 'business_activity_type', 'nic_code_id',
        'about_business', 'employee_count', 'investment_in_plant',
        'aadhar_image', 'gstin_number', 'is_gem',
        'is_treds', 'fees', 'form_type', 'existing_aadhar_number'
    ];
}
