<?php

use App\SocialCategory;
use Illuminate\Database\Seeder;

class SocialCategorySeeder extends Seeder
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
                'name' => 'General',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'ST',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'SC',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'OBC',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];

        SocialCategory::insert($data);
    }
}
