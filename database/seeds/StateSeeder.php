<?php

use App\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();
        $data = [
            [
                'name' => 'ANDAMAN AND NICOBAR ISLANDS / अंदमान और निकोबार द्वीपसमूह',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'ANDHRA PRADESH / आन्ध्र प्रदेश',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'ARUNACHAL PRADESH / अरुणाचल प्रदेश',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'ASSAM / असम',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'BIHAR / बिहार',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'CHANDIGARH / चंडीगढ़',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'CHHATISGARH / छत्तीसगढ़',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'DADRA AND NAGAR HAVELI / दादरा और नगर हवेली',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'DAMAN AND DIU / दमन और दीव',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'DELHI / दिल्ली',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'GOA / गोवा',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'GUJARAT / गुजरात',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'HARYANA / हरियाणा',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'HIMACHAL PRADESH / हिमाचल प्रदेश',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'JAMMU AND KASHMIR / जम्मू और कश्मीर',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'JHARKHAND / झारखण्ड',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'KARNATAKA / कर्णाटक',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'KERALA / केरल',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'LADAKH / लद्दाख',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'LAKSHADWEEP / लक्षद्वीप',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'MADHYA PRADESH / मध्य प्रदेश',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'MAHARASHTRA / महाराष्ट्र',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'MANIPUR / मणिपुर',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'MEGHALAYA / मेघालय',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'MIZORAM / मिज़ोरम',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'NAGALAND / नागालैण्ड',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'ODISHA / ओड़िशा',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'PONDICHERRY / पुडुचेरी',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'PUNJAB / पंजाब',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'RAJASTHAN / राजस्थान',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'SIKKIM / सिक्किम',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'TAMIL NADU / तमिलनाडु',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'TELANGANA / तेलंगाना',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'TRIPURA / त्रिपुरा',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'UTTAR PRADESH / उत्तर प्रदेश',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'UTTARAKHAND / उत्तराखण्ड',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'WEST BENGAL / पश्चिम बंगाल',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];

        State::insert($data);
    }
}
