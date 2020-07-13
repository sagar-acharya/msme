<?php

use App\NicCode;
use Illuminate\Database\Seeder;

class NicCodeSeeder extends Seeder
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
                'name' => '01-Crop and Animal Production, hunting and related service activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '05-Mining and quarrying',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '06-Extraction of crude petroleum and natural gas',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '07-Mining of metal ores',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '08-Other mining and quarrying',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '09-Mining support service activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '10-Manufacture of food products',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '11-Manufacture of beverages',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '12-Manufacture of tobacco products',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '13-Manufacture of textiles',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '14-Manufacture of wearing apparel',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '15-Manufacture of leather and related products',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '16-Manufacture of wood and products of wood and cork; except furniture; manufacture of articles of straw and plaiting materials',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '17-Manufacture of paper and paper products',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '18-Printing and reproduction of recorded media',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '19-Manufacture of coke and refined petroleum products',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '20-Manufacture of chemicals and chemical products',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '21-Manufacture of pharmaceuticals; medicinal chemical and botanical products',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '22-Manufacture of rubber and plastics products',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '23-Manufacture of other non-metallic mineral products',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '24-Manufacture of basic metals',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '25-Manufacture of fabricated metal products; except machinery and equipment',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '26-Manufacture of computer; electronic and optical products',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '27-Manufacture of electrical equipment',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '28-Manufacture of machinery and equipment n.e.c.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '29-Manufacture of motor vehicles; trailers and semi-trailers',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '30-Manufacture of other transport equipment',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '31-Manufacture of furniture',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '32-Other manufacturing',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '33-Repair and installation of machinery and equipment',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '35-Electricity; gas; steam and air conditioning supply',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '36-Water collection; treatment and supply',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '37-Sewerage',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '38-Waste collection; treatment and disposal activities; materials recovery',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '39-Remediation activities and other waste management services',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '41-Construction of building',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '42-Civil Engineering',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '43-Specialized construction activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '49-Land transport and transport via pipelines',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '50-Water transport',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '51-Air Transport',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '52-Warehousing and support activities for transportation',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '53-Postal and courier activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '55-Accommodation',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '56-Food and beverage service activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '58-Publishing activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '59-Motion picture; video and television programme production; sound recording  and music publishing activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '60-Broadcasting and programming activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '61-Telecommunications',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '62-Computer programming; consultancy and related activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '63-Information service activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '64-Financial service activities; except insurance and pension funding',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '65-Insurance; reinsurance and pension funding; except compulsory social security',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '66-Other financial activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '68-Real estate activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '69-Legal and accounting activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '70-Activities of head offices; management consultancy activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '71-Architecture and engineering activities; technical testing and analysis',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '72-Scientific research and development',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '73-Advertising and market research',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '74-Other professional; scientific and technical activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '75-Veterinary activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '77-Rental and leasing activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '78-Employment activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '79-Travel agency; tour operator and other reservation service activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '80-Security and investigation activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '81-Services to buildings and landscape activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '82-Office administrative; office support and other business support activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '84-Public administration and defence; compulsory social security',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '85-Education',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '86-Human health activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '87-Residential care activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '88-Social work activities without accommodation',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '90-Creative; arts and entertainment activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '91-Libraries; archives; museums and other cultural activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '92-Gambling and betting activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '93-Sports activities and amusement and recreation activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '94-Activities of membership organizations',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '95-Repair of computers and personal and household goods',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => '96-Other personal service activities',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];

        NicCode::insert($data);
    }
}
