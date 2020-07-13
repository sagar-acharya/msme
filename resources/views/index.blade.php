@extends('layouts.master')
@section('content')
<section class="section" id="contact" style="padding: 0.1rem 0 !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" style="border: 1px solid #5964C6;">
                <!-- Contacts Form -->
                <form class="contact_form" action="/udyam-form-submit" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12 mb-12" style="background-color: #5964C6;text-align:center;color:#fff; font-size:20px;">
                            <p style="font-weight: bold;">MSME / Udyog Aadhar Registration Form</p>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <!-- Input -->
                        <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    1. Your Aadhaar No./ आपका आधार नं
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <input class="form-control {{ $errors->has('aadhar_number') ? 'is-invalid' : ''}}"  name="aadhar_number" id="aadhar_number" value="{{old('aadhar_number')}}" required="" placeholder="" type="text">
                                    @if($errors->has('aadhar_number'))
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('aadhar_number') }}</strong>
                                    </div>
                                    @endif
                                    <i style="color: #5964C6;"><span>Note:- Mobile Number Must Be Registered With Aadhaar for OTP XXX Verification</span></i>
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    2. Name of Entrepreneur/ Applicant/ उद्यमी का नाम
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control  {{ $errors->has('entrepreneur_name') ? 'is-invalid' : ''}}" name="entrepreneur_name" id="entrepreneur_name" value="{{old('entrepreneur_name')}}" required="" placeholder="" type="text">
                                    @if($errors->has('entrepreneur_name'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('entrepreneur_name') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <div class="w-100"></div>

                        <!-- Input -->
                        <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    3. Social Category / सामाजिक वर्ग
                                </label>

                                <div class="input-group">
                                    <select class="form-control {{ $errors->has('social_category_id') ? 'is-invalid' : ''}}" name="social_category_id" id="social_category_id" value="{{old('social_category_id')}}">
                                        <option value="">Select Social Category</option>
                                        @foreach ($socialCategories as $socialCategory)
                                        @if(old('social_category_id') == $socialCategory->id)
                                        <option value="{{$socialCategory->id}}" selected>{{$socialCategory->name}}</option>
                                        @else
                                        <option value="{{$socialCategory->id}}">{{$socialCategory->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @if($errors->has('social_category_id'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('social_category_id') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    4. Gender / लिंग
                                </label>

                                <div class="input-group ">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="gender" checked type="radio" id="gender" value="male">
                                        <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="gender" type="radio" id="gender" value="female">
                                        <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="gender" type="radio" id="gender" value="other">
                                        <label class="form-check-label" for="inlineCheckbox3">Other</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    5. Physically Handicapped / शारीरिक रूप से विकलांग
                                </label>

                                <div class="input-group ">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="is_handicapped" type="radio" id="inlineCheckbox1" value="1">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="is_handicapped" type="radio" checked id="inlineCheckbox2" value="0">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->
                        <!-- Input -->
                        <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    6. Name of Business/ Enterprise / उद्यम का नाम
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('business_name') ? 'is-invalid' : ''}}" name="business_name" id="business_name" value="{{old('business_name')}}" required="" placeholder="" type="text">
                                    @if($errors->has('business_name'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('business_name') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    7. Type of Organisation / संगठन के प्रकार
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <select required="required" class="form-control {{ $errors->has('organization_type_id') ? 'is-invalid' : ''}}" name="organization_type_id" id="organization_type_id" value="{{old('organization_type_id')}}">
                                        <option value="">Select Type of Organization</option>
                                        @foreach ($organizationTypes as $organizationType)
                                        @if(old('organization_type_id') == $organizationType->id)
                                        <option value="{{$organizationType->id}}" selected>{{$organizationType->name}}</option>
                                        @else
                                        <option value="{{$organizationType->id}}">{{$organizationType->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @if($errors->has('organization_type_id'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('organization_type_id') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    8. PAN CARD NUMBER / पैन कार्ड नंबर
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('pan_number') ? 'is-invalid' : ''}}" name="pan_number" id="pan_number" value="{{old('pan_number')}}" required="" placeholder="" type="text">
                                    @if($errors->has('pan_number'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('pan_number') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    9. Location of Plant (Address) / संयंत्र के स्थान
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('house_number') ? 'is-invalid' : ''}}" name="house_number" id="house_number" value="{{old('house_number')}}" required="" placeholder="Flat/Door No. /फ्लैट / द्वार / ब्लॉक सं" type="text">
                                    @if($errors->has('house_number'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('house_number') }}</strong>
                                    </div>
                                    @endif
                                </div>
                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('premise') ? 'is-invalid' : ''}}" name="premise" id="premise" value="{{old('premise')}}" required="" placeholder="Name of Premise/Building /परिसर / भवन / गांव का नाम" type="text">
                                    @if($errors->has('premise'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('premise') }}</strong>
                                    </div>
                                    @endif
                                </div>
                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('road') ? 'is-invalid' : ''}}" name="road" id="road" value="{{old('road')}}" required="" placeholder="Road/Street /सड़क/ मार्ग / गली" type="text">
                                    @if($errors->has('road'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('road') }}</strong>
                                    </div>
                                    @endif
                                </div>
                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('area') ? 'is-invalid' : ''}}" name="area" id="area" value="{{old('area')}}" value="{{old('aadhar_number')}}" required="" placeholder="Area/Locality /क्षेत्र / स्थान" type="text">
                                    @if($errors->has('area'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('area') }}</strong>
                                    </div>
                                    @endif
                                </div>
                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('city') ? 'is-invalid' : ''}}" name="city" id="city" value="{{old('city')}}" required="" placeholder="City /शहर" type="text">
                                    @if($errors->has('city'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('city') }}</strong>
                                    </div>
                                    @endif
                                </div>
                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('pin') ? 'is-invalid' : ''}}" name="pin" id="pin" value="{{old('pin')}}" required="" placeholder="PIN /पिन" type="text">
                                    @if($errors->has('pin'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('pin') }}</strong>
                                    </div>
                                    @endif
                                </div>
                                <div class="input-group ">
                                    <select required="required" class="form-control {{ $errors->has('state_id') ? 'is-invalid' : ''}}" name="state_id" id="state_id" value="{{old('state_id')}}">
                                        <option value="">Select State</option>
                                        @foreach ($states as $state)
                                        @if(old('state_id') == $state->id)
                                        <option value="{{$state->id}}" selected>{{$state->name}}</option>
                                        @else
                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @if($errors->has('state_id'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('state_id') }}</strong>
                                    </div>
                                    @endif
                                </div>
                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('district') ? 'is-invalid' : ''}}" name="district" id="district" value="{{old('district')}}" required="" placeholder="District /जिला" type="text">
                                    @if($errors->has('district'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('district') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-12 mb-12" id="office-address-group">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    10. Office Address / आधिकारिक पता Same As Plant Address
                                </label>

                                <div class="input-group">
                                    <select required="required" class="form-control" name="is_office_address_same" id="is_office_address_same" value="{{old('is_office_address_same')}}">
                                        @if(old('is_office_address_same') == 'yes')
                                        <option value="yes" selected>Yes</option>
                                        @elseif(old('is_office_address_same') == 'no')
                                        <option value="no" selected>No</option>
                                        @else
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('house_number1') ? 'is-invalid' : ''}}" name="house_number1" id="house_number1" value="{{old('house_number1')}}" placeholder="Flat/Door No. /फ्लैट / द्वार / ब्लॉक सं" type="text">
                                    @if($errors->has('house_number1'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('house_number1') }}</strong>
                                    </div>
                                    @endif
                                </div>
                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('premise1') ? 'is-invalid' : ''}}" name="premise1" id="premise1" value="{{old('premise1')}}" placeholder="Name of Premise/Building /परिसर / भवन / गांव का नाम" type="text">
                                    @if($errors->has('premise1'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('premise1') }}</strong>
                                    </div>
                                    @endif
                                </div>
                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('road1') ? 'is-invalid' : ''}}" name="road1" id="road1" value="{{old('road1')}}" placeholder="Road/Street /सड़क/ मार्ग / गली" type="text">
                                    @if($errors->has('road1'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('road1') }}</strong>
                                    </div>
                                    @endif
                                </div>
                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('area1') ? 'is-invalid' : ''}}" name="area1" id="area1" value="{{old('area1')}}" placeholder="Area/Locality /क्षेत्र / स्थान" type="text">
                                    @if($errors->has('area1'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('area1') }}</strong>
                                    </div>
                                    @endif
                                </div>
                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('city1') ? 'is-invalid' : ''}}" name="city1" id="city1" value="{{old('city1')}}" placeholder="City /शहर" type="text">
                                    @if($errors->has('city1'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('city1') }}</strong>
                                    </div>
                                    @endif
                                </div>
                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('pin1') ? 'is-invalid' : ''}}" name="pin1" id="pin1" value="{{old('pin1')}}" placeholder="PIN /पिन" type="text">
                                    @if($errors->has('pin1'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('pin1') }}</strong>
                                    </div>
                                    @endif
                                </div>
                                <div class="input-group ">
                                    <select class="form-control {{ $errors->has('state_id1') ? 'is-invalid' : ''}}" name="state_id1" id="state_id1" value="{{old('state_id1')}}">
                                        @foreach ($states as $states)
                                        @if(old('state_id1') == $states->id)
                                        <option value="{{$states->id}}" selected>{{$states->name}}</option>
                                        @else
                                        <option value="{{$states->id}}">{{$states->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @if($errors->has('state_id1'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('state_id1') }}</strong>
                                    </div>
                                    @endif
                                </div>
                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('district1') ? 'is-invalid' : ''}}" name="district1" id="district1" value="{{old('district1')}}" placeholder="District /जिला" type="text">
                                    @if($errors->has('district1'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('district1') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->


                        <!-- Input -->
                        <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    11. Mobile No / मोबाइल नंबर +91-
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('mobile') ? 'is-invalid' : ''}}" name="mobile" id="mobile" value="{{old('mobile')}}" required="" placeholder="" type="text">
                                    @if($errors->has('mobile'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('mobile') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    12. Email ID / ईमेल
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" name="email" id="email" value="{{old('email')}}" required="" placeholder="" type="email">
                                    @if($errors->has('email'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    13. Date of Commencement of Business / उद्यम के प्रारंभ की तिथि
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('commencement_date') ? 'is-invalid' : ''}}" name="commencement_date" id="commencement_date" value="{{old('commencement_date')}}" required="" placeholder="" type="date">
                                    @if($errors->has('commencement_date'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('commencement_date') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    14. Bank Account Number / बैंक खाता संख्या
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('bank_account_number') ? 'is-invalid' : ''}}" name="bank_account_number" id="bank_account_number" value="{{old('bank_account_number')}}" required="" placeholder="" type="text">
                                    @if($errors->has('bank_account_number'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('bank_account_number') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    15.  IFSC Code / आईएफएस कोड
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('ifsc_code') ? 'is-invalid' : ''}}" name="ifsc_code" id="ifsc_code" value="{{old('ifsc_code')}}" required="" placeholder="" type="text">
                                    @if($errors->has('ifsc_code'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('ifsc_code') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->


                        <!-- Input -->
                        <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    16. Main Business Activity of Enterprise / इकाई का प्रमुख गतिविधि
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="input-group ">
                                    <select required="required" class="form-control {{ $errors->has('business_activity_type') ? 'is-invalid' : ''}}" name="business_activity_type" id="business_activity_type" value="{{old('business_activity_type')}}">
                                        @if(old('business_activity_type') == '')
                                        <option value="">Select Activity of Enterprise</option>
                                        <option value="Manufacturer">Manufacturer</option>
                                        <option value="Service provider">Service provider</option>
                                        @elseif(old('business_activity_type') == 'Manufacturer')
                                        <option value="Manufacturer" selected>Manufacturer</option>
                                        @elseif(old('business_activity_type') == 'Service provider')
                                        <option value="Service provider" selected>Service provider</option>
                                        @endif
                                    </select>
                                    @if($errors->has('business_activity_type'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('business_activity_type') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-12 mb-12" id="nic_code_id_group">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    17. NIC 2 Digit Code - Choose primary Business Activity
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <select class="form-control {{ $errors->has('nic_code_id') ? 'is-invalid' : ''}}" name="nic_code_id" id="nic_code_id" value="{{old('nic_code_id')}}">
                                        <option value="">Select NIC 2 Activity</option>
                                        @foreach ($nicCodes1 as $nicCodes)
                                        @if(old('nic_code_id') == $nicCodes->id)
                                        <option value="{{$nicCodes->id}}" selected>{{$nicCodes->name}}</option>
                                        @else
                                        <option value="{{$nicCodes->id}}">{{$nicCodes->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @if($errors->has('nic_code_id'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nic_code_id') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-12 mb-12"  id="nic_code_id1_group">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    17. NIC 2 Digit Code - Choose primary Business Activity
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="input-group ">
                                    <select class="form-control {{ $errors->has('nic_code_id1') ? 'is-invalid' : ''}}" name="nic_code_id1" id="nic_code_id1" value="{{old('nic_code_id1')}}">
                                        <option value="">Select NIC 2 Activity</option>
                                        @foreach ($nicCodes2 as $nicCodes)
                                        @if(old('nic_code_id1') == $nicCodes->id)
                                        <option value="{{$nicCodes->id}}" selected>{{$nicCodes->name}}</option>
                                        @else
                                        <option value="{{$nicCodes->id}}">{{$nicCodes->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @if($errors->has('nic_code_id1'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nic_code_id1') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    18. Additional details about Business /व्यापार के बारे में अतिरिक्त जानकारी
                                </label>

                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('about_business') ? 'is-invalid' : ''}}" name="about_business" id="about_business" value="{{old('about_business')}}" placeholder="" type="text">
                                    @if($errors->has('about_business'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('about_business') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    19. Number of employees / व्यक्ति नियोजित
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('employee_count') ? 'is-invalid' : ''}}" name="employee_count" id="employee_count" value="{{old('employee_count')}}" required="" placeholder="" type="text">
                                    @if($errors->has('employee_count'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('employee_count') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    20. Investment in Plant and Machinery (Amount in Lacs) / निवेश
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('investment_in_plant') ? 'is-invalid' : ''}}" name="investment_in_plant" id="investment_in_plant" value="{{old('investment_in_plant')}}" required="" placeholder="" type="text">
                                    @if($errors->has('investment_in_plant'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('investment_in_plant') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    21. Attach your Aadhaar Card (Optional)
                                </label>

                                <div class="input-group">
                                    <input class="form-control {{ $errors->has('aadhar_image') ? 'is-invalid' : ''}}" name="aadhar_image" id="aadhar_image" placeholder="" type="file">
                                    @if($errors->has('aadhar_image'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('aadhar_image') }}</strong>
                                    </div>
                                    @endif
                                </div>
                                <div class="input-group">
                                    (File should be: jpg,png file < 5MB)
                                    OR You Can send Documents on <span style="color: #5964c6;">support@udyamonline.org </span>
                                    &nbsp; OR WhatsApp On &nbsp;<span style="color: #5964c6;"> +91 9876543210</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    22. GSTIN Number (If any)
                                </label>

                                <div class="input-group ">
                                    <input class="form-control {{ $errors->has('gstin_number') ? 'is-invalid' : ''}}" name="gstin_number" id="gstin_number" value="{{old('gstin_number')}}" placeholder="" type="text">
                                    @if($errors->has('gstin_number'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('gstin_number') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block">
                                    23. Are you interested to get registered on Government e-Market(GeM) Portal
                                </label>

                                <div class="input-group ">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="is_gem" type="radio" checked id="inlineCheckbox1" value="1">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="is_gem" type="radio" id="inlineCheckbox2" value="0">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block">
                                    24. Are you interested to get registered on TReDS Portal
                                </label>
                                <div class="input-group ">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="is_treds" type="radio" checked id="inlineCheckbox1" value="1">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="is_treds" type="radio" id="inlineCheckbox2" value="0">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-12 mb-12">
                            <div class="form-group">
                                <label class="h6 small d-block text-uppercase">
                                    Fees<span class="text-danger">*</span>
                                </label>
                                <label class="h4 small d-block text-uppercase">
                                    ₹ 1,299.00
                                </label>

                                <label class="h6 small d-block text-uppercase">
                                    Consent<span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <input required="required" class="{{ $errors->has('t_and_c') ? 'is-invalid' : ''}}" type="checkbox" style="margin: 7px;" id="t_and_c" name="t_and_c" value="true">&nbsp;<span style="color: darkorange;">I agree to the terms & condition and disclaimer.</span></spam></input>
                                    @if($errors->has('t_and_c'))
                                    <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('t_and_c') }}</strong>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                    </div>


                    <div class="form-group">
                        <input name="submit" type="submit" class="btn btn-primary btn-circled" value="Submit and Pay">
                    </div>
                </form>
                <!-- End Contacts Form -->
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-sm-12 mb-12" style="text-align:center;color:#5964c6; font-size:20px;">
                        <p style="border: 2px solid orange;font-weight:bold;">Instructions / अनुदेश</p>
                    </div>
                </div>
                <br/>
                <ol style="color: #5964c6;font-weight:500;font-size:18px;">
                    <li>
                        Adhaar Number : Please fill applicant 12 digit Aadhaar number in the appropriate field.<br/>
                        <span class="hindi-title">आधार संख्या : कृपया आवेदक 12 अंकों का आधार नंबर उपयुक्त क्षेत्र में भरें।</span>
                    </li>
                    <li>
                        Name of Applicant : should be as per aadhaar card <br/>
                        <span class="hindi-title">आवेदक का नाम : आधार कार्ड के अनुसार होना चाहिए</span>
                    </li>
                    <li>
                        Social Category : Select the Social Category of applicant from the given options.<br/>
                        <span class="hindi-title">सामाजिक श्रेणी : दिए गए विकल्पों में से आवेदक की सामाजिक श्रेणी का चयन करें।</span>
                    </li>
                    <li>
                        Gender : Select the gender of applicant form provided option<br/>
                        <span class="hindi-title">लिंग : आवेदक दिए गए विकल्प के लिंग का चयन करें</span>
                    </li>
                    <li>
                        Physically Handicapped : Select the appropriate option<br/>
                        <span class="hindi-title">शारीरिक रूप से विकलांग : उचित विकल्प का चयन करें</span>
                    </li>
                    <li>
                        Name of Enterprise / Business : Please fill the name of Business / Enterprise which will get printed on Udhyam/MSME Certificate<br/>
                        <span class="hindi-title">एंटरप्राइज / बिजनेस का नाम : कृपया बिजनेस / एंटरप्राइज का नाम भरें, जो उधम / एमएसएमई सर्टिफिकेट पर प्रिंट होगा</span>
                    </li>
                    <li>
                        Type of Organization : Select the type of organization from the given options which will get printed on Udhyam/MSME Certificate<br/>
                        <span class="hindi-title">संगठन का प्रकार : दिए गए विकल्पों में से संगठन के प्रकार का चयन करें, जो उधम / एमएसएमई प्रमाणपत्र पर मुद्रित होगा</span>
                    </li>
                    <li>
                        PAN Card Number : Please fill PAN card number of your organisation , in case of proprietorship firm please enter applicant/propritor pan number.<br/>
                        <span class="hindi-title">पैन कार्ड नंबर : प्रोप्राइटरशिप फर्म के मामले में, कृपया अपने संगठन का पैन कार्ड नंबर भरें, आवेदक / प्रॉपर पैन नंबर दर्ज करें।</span>
                    </li>
                    <li>
                        Location of Plant : Please fill the location address of plant/ establishment/ factory/ shop properly<br/>
                        <span class="hindi-title">कारखाने का स्थान : कृपया संयंत्र / प्रतिष्ठान / कारखाने / दुकान का स्थान पता ठीक से भरें</span>
                    </li>
                    <li>
                        Office Address : Please provide office address, if address other than plant location.<br/>
                    </li>
                    <li>
                        Mobile No : Please fill the correct Mobile Number of Applicant <br/>
                        <span class="hindi-title">मोबाइल नंबर : आवेदक का सही मोबाइल नंबर यहां लिखें</span>
                    </li>
                    <li>
                        Mail ID : Fill the correct Mail ID of Applicant<br/>
                        <span class="hindi-title">मेल आईडी : यहां अपनी सही ईमेल आईडी का उल्लेख करें</span>
                    </li>
                    <li>
                        Date of Commencement of Business : Fill the date of Commencement of Business which will get printed on Udyam/MSME Certificate.<br/>
                        <span class="hindi-title">व्यवसाय के प्रारंभ की तिथि : व्यवसाय के आदेश की तारीख भरें जो उदयम / एमएसएमई प्रमाणपत्र पर मुद्रित हो जाएगी।</span>
                    </li>
                    <li>
                        Bank Account Number : Please fill the Applicant’s bank account number.
                        <span class="hindi-title">बैंक खाता संख्या : कृपया आवेदक का बैंक खाता नंबर भरें</span>
                    </li>
                    <li>
                        Bank IFSC Code : Please fill the Applicant Bank IFS Code. The IFS code is printed on the Cheque Books.<br/>
                        <span class="hindi-title">बैंक IFSC कोड : कृपया आवेदक बैंक IFS कोड भरें। IFS कोड चेक बुक्स पर छपा है।</span>
                    </li>
                    <li>
                        Main Business Activity of Enterprise : Please select the Main Business activity from the given options.<br/>
                        <span class="hindi-title">एंटरप्राइज की मुख्य व्यावसायिक गतिविधि : कृपया दिए गए विकल्पों में से मुख्य व्यवसाय गतिविधि का चयन करें।</span>
                    </li>
                    <li>
                        NIC 2 Digit Code :Select the 2 Digit NIC Code from the given options considering your business activity<br/>
                        <span class="hindi-title">एनआईसी 2 अंक कोड : अपनी व्यावसायिक गतिविधि को देखते हुए दिए गए विकल्पों में से 2 अंकों का एनआईसी कोड चुनें</span>
                    </li>
                    <li>
                        Additional details about Business : Please fill Additional details about business. (i.e. manufacturing of garment products, trading of grosury, accomodation serivce, medical shop etc )<br/>
                        <span class="hindi-title">व्यवसाय के बारे में अतिरिक्त विवरण : व्यापार के बारे में अतिरिक्त जानकारी (अर्थात परिधान उत्पादों का निर्माण, किराना का व्यापार, आवास सेवाएँ, चिकित्सा दुकान आदि)</span>
                    </li>
                    <li>
                        Number of employees : Please fill total number of people working in enstablishment/shop/office.<br/>
                        <span class="hindi-title">कर्मचारियों की संख्या : कृपया संस्थान/ दुकान / कार्यालय में काम करने वाले लोगों की कुल संख्या भरें।</span>
                    </li>
                    <li>
                        Investment in Plant & Machinery / Equipment : Please fill the total investment made in Plant, Machinery, and Equipment etc. to start your business.<br/>
                        <span class="hindi-title">प्लांट और मशीनरी / उपकरण में निवेश : कृपया अपना व्यवसायजीएसटीआईएन नंबर: कृपया GSTIN नंबर दर्ज करें (यदि कोई हो) शुरू करने के लिए प्लांट, मशीनरी और उपकरण आदि में किए गए कुल निवेश को भरें।</span>
                    </li>
                    <li>
                        Attachment : Attach scan copy of your Aadhaar Card. (jpg,png,pdf file < 5MB) <br/>
                        <span class="hindi-title">अपने आधार कार्ड की स्कैन कॉपी Attach करें. आप अपने आधार कार्ड को ईमेल पर भी भेज सकते हैं (support@udyamonline.org)</span>
                    </li>
                    <li>
                        GSTIN Number:  Please enter the GSTIN Number (If any) <br/>
                        <span class="hindi-title">जीएसटीआईएन नंबर : कृपया GSTIN नंबर दर्ज करें (यदि कोई हो)</span>
                    </li>
                    <li>
                        Government e-Market(GeM) : The Government E-Marketplace commonly known as GeM was initiated with a similar premise. The marketplace helps sellers get good prices for their goods and services, and the government departments to get a one-stop-solution to all their needs. This has become the National Procurement Portal of India.<br/>
                        <span class="hindi-title">सरकारी ई-मार्केट (GeM) : गवर्नमेंट ई-मार्केटप्लेस जिसे आमतौर पर GeM के रूप में जाना जाता है, एक समान आधार के साथ शुरू किया गया था। मार्केटप्लेस विक्रेताओं को उनकी वस्तुओं और सेवाओं के लिए अच्छे मूल्य प्राप्त करने में मदद करता है, और सरकारी विभागों को उनकी सभी जरूरतों के लिए वन-स्टॉप-समाधान प्राप्त करने में मदद करता है। यह भारत का राष्ट्रीय प्रोक्योरमेंट पोर्टल बन गया है।</span>
                    </li>
                    <li>
                        TReDS Portal : TReDS is an electronic platform for facilitating the financing / discounting of trade receivables of Micro, Small and Medium Enterprises (MSMEs) through multiple financiers. These receivables can be due from corporates and other buyers, including Government Departments and Public Sector Undertakings (PSUs). <br/>
                        <span class="hindi-title">TREDS पोर्टल : TReDS सूक्ष्म, लघु और मध्यम उद्यमों (MSME) के व्यापार प्राप्तियों के वित्तपोषण / छूट की सुविधा के लिए एक इलेक्ट्रॉनिक प्लेटफ़ॉर्म है जो कई फाइनेंसरों के माध्यम से होता है। ये प्राप्य कॉरपोरेट और अन्य खरीदारों से हो सकते हैं, जिनमें सरकारी विभाग और सार्वजनिक क्षेत्र के उपक्रम (पीएसयू) शामिल हैं</span>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
    <script>
        $( document ).ready(function() {
            businessActivity();
            officeAddress();
        });

        $(document).on('change', '#business_activity_type', function() {
            businessActivity();
        });

        $(document).on('change', '#is_office_address_same', function() {
            officeAddress();
        });

        function businessActivity() {
            var type = $('#business_activity_type').val();
            if(type == '') {
                $('#nic_code_id_group').hide();
                $('#nic_code_id1_group').hide();
            } else if(type == 'Manufacturer') {
                $('#nic_code_id_group').show();
                $('#nic_code_id1_group').hide();
            } else if(type == 'Service provider') {
                $('#nic_code_id_group').hide();
                $('#nic_code_id1_group').show();
            }
        }

        function officeAddress() {
            var type = $('#is_office_address_same').val();
            if(type == 'yes') {
                $('#house_number1').hide();
                $('#premise1').hide();
                $('#road1').hide();
                $('#area1').hide();
                $('#city1').hide();
                $('#pin1').hide();
                $('#state_id1').hide();
                $('#district1').hide();
            } else if(type == 'no') {
                $('#house_number1').show();
                $('#premise1').show();
                $('#road1').show();
                $('#area1').show();
                $('#city1').show();
                $('#pin1').show();
                $('#state_id1').show();
                $('#district1').show();
            }
        }
    </script>
@endsection
