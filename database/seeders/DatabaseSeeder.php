<?php

namespace Database\Seeders;

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
        $FS = new ForumSeeder;
        $CS = new ClanSeeder;
        $PS = new PostSeeder;

        $FS->run();
        $CS->run();
        $PS->run();
    }
}
