<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_users')->insert([
        	'username' => 'admin',
        	'password' => password_hash('admin', PASSWORD_DEFAULT)
        ]);
    }
}
