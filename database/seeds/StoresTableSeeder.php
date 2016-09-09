<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->truncate();
        $insertArray = [
        	[
            'name' => '#1',
            'location' => 'ქეთევან წამებულის 10',
            ],
           [
            'name' => '#2',
            'location' => 'online',
            ],
        ];
        DB::table('stores')->insert($insertArray);
    }
}
