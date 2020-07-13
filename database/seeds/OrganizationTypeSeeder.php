<?php

use App\OrganizationType;
use Illuminate\Database\Seeder;

class OrganizationTypeSeeder extends Seeder
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
                'name' => 'Proprietorship Firm',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Hindu Undivided Family (HUF)',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Partnership Firm',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Limited Liability Partnership',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Co-operative',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Public Limited Company',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Private Limited Company',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Self Help Group',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Society',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Trust',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];
        OrganizationType::insert($data);
    }
}
