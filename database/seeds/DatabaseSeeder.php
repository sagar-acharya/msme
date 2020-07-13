<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NicCodeSeeder::class);
        $this->call(OrganizationTypeSeeder::class);
        $this->call(SocialCategorySeeder::class);
        $this->call(StateSeeder::class);
    }
}
