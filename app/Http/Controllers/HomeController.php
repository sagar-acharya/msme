<?php

namespace App\Http\Controllers;

use App\AadharRegistration;
use App\Address;
use App\Http\Requests\UdyamFormRequest;
use App\Http\Requests\MsmeFormRequest;
use App\NicCode;
use App\OrganizationType;
use App\SocialCategory;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Razorpay\Api\Api;

class HomeController extends Controller
{

    public function index() {
        for($index = 1; $index <= 38; $index++) {
            $nicId1[] = $index;
        }
        for($index = 39; $index <= 80; $index++) {
            $nicId2[] = $index;
        }

        $nicCodes1 = NicCode::whereIn('id',$nicId1)->get();
        $nicCodes2 = NicCode::whereIn('id',$nicId2)->get();
        $socialCategories = SocialCategory::all();
        $organizationTypes = OrganizationType::all();
        $states = State::all();
        return view('index')->with(compact('nicCodes1','nicCodes2','socialCategories','organizationTypes','states'));
    }

    public function msmeToUdyamRegistration() {
        for($index = 1; $index <= 38; $index++) {
            $nicId1[] = $index;
        }
        for($index = 39; $index <= 80; $index++) {
            $nicId2[] = $index;
        }

        $nicCodes1 = NicCode::whereIn('id',$nicId1)->get();
        $nicCodes2 = NicCode::whereIn('id',$nicId2)->get();
        $socialCategories = SocialCategory::all();
        $organizationTypes = OrganizationType::all();
        $states = State::all();
        return view('msme-to-udyam')->with(compact('nicCodes1','nicCodes2','socialCategories','organizationTypes','states'));
    }

    public function payment($id) {
        $id = decrypt($id);
        $aadharData = AadharRegistration::findOrFail($id);
        $keyId = 'rzp_test_W0S90puu5wD7VV';
        $keySecret = '3mAr0xDFqKADCD0YufGfxXNh';
        $displayCurrency = 'INR';
        $amount = 1299.00*100;
        $api = new Api($keyId, $keySecret); //keyId, keySecret
        $orderData = [
            'receipt'         => 'UDM'.$id,
            'amount'          => $amount, // rupees in paise
            'currency'        => 'INR',
            'payment_capture' => 1 // auto capture
        ];

        $razorpayOrder = $api->order->create($orderData);
        $razorpayOrderId = $razorpayOrder['id'];
        $checkout = 'automatic';
        $data = [
            "key"               => $keyId,
            "amount"            => $amount,
            "name"              => $aadharData->entrepreneur_name,
            "description"       => $aadharData->business_name,
            "image"             => "https://s29.postimg.org/r6dj1g85z/daft_punk.jpg",
            "prefill"           => [
            "name"              => $aadharData->entrepreneur_name,
            "email"             => $aadharData->email,
            "contact"           => $aadharData->email,
            ],
            "notes"             => [
            "address"           => "address",
            "merchant_order_id" => $aadharData->id,
            ],
            "theme"             => [
                "color"             => '#5964C6',
            ],
            "order_id"          => $razorpayOrderId,
        ];

        return view('payment')->with(compact('data','displayCurrency','orderData'));
    }

    public function paymentSucess(Request $request) {
        $orderId = $request->shopping_order_id;
        $id = str_replace("UDM","",$orderId);
        $aadharData = AadharRegistration::findOrFail($id);
        $aadharData->status = true;
        $aadharData->payment_gateway_data = json_encode($request->all());
        $aadharData->save();
        return view('payment-success')->with(compact('orderId'));
    }

    public function msmeRegistrationSubmit(MsmeFormRequest $request) {
        $id = $this->registrationFormSubmit($request, 2); // 2 For Msme to Udyam Registration Form
        return redirect()->route('payment', ['id' => encrypt($id)]);
    }

    public function udyamRegistrationSubmit(UdyamFormRequest $request) {
        $id = $this->registrationFormSubmit($request, 1); //1 For Udyam Registration Form
        return redirect()->route('payment', ['id' => encrypt($id)]);
    }

    public function registrationFormSubmit(Request $request, $formType) {
        $data = $request->all();
        $data['form_type'] = $formType;

        if($data['business_activity_type'] == 'Manufacturer') {
            $data['nic_code_id'] = $data['nic_code_id'];
        } else if($data['business_activity_type'] == 'Service provider') {
            $data['nic_code_id'] = $data['nic_code_id1'];
        }

        if ($request->hasFile('aadhar_image')) {
            $imageName = strtotime(now()).'.'.request()->aadhar_image->getClientOriginalExtension();
            $path = public_path('images/client');
            if(Storage::exists($path)) {
                Storage::makeDirectory($path);
            }

            $path = Storage::putFileAs(
                $path, $request->file('aadhar_image'), $imageName
            );
            $data['aadhar_image'] = $imageName;
        }

        $aadharData = AadharRegistration::create($data);
        $data['aadhar_registration_id'] = $aadharData->id;
        if($data['is_office_address_same'] == 'no') {
            $data['is_office_address_same'] = false;
        } elseif($data['is_office_address_same'] == 'yes') {
            $data['is_office_address_same'] = true;
        }
        Address::create($data);
        if(!$data['is_office_address_same']) {
            $address['house_number'] = $data['house_number1'];
            $address['premise'] = $data['premise1'];
            $address['road'] = $data['road1'];
            $address['area'] = $data['area1'];
            $address['city'] = $data['city1'];
            $address['pin'] = $data['pin1'];
            $address['state_id'] = $data['state_id1'];
            $address['aadhar_registration_id'] = $data['aadhar_registration_id'];
            $address['district'] = $data['district1'];
            $address['is_office_address_same'] = $data['is_office_address_same'];
            Address::create($address);
        }

        return $aadharData->id;
    }

    public function trackApplication() {
        return view('track-application');
    }

    public function faqs() {
        return view('faqs');
    }

    public function procedure() {
        return view('procedure');
    }

    public function certificate() {
        return view('certificate');
    }

    public function aboutUs() {
        return view('about');
    }

    public function contactUs() {
        return view('contact');
    }
}
