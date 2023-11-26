<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_foods')->insert([
        	'name' => 'Makanan',
        	'description' => 'Bisa dimakan'
        ]);
    }
}
