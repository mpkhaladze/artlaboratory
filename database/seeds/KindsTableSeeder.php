<?php

use Illuminate\Database\Seeder;

class KindsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kinds')->truncate();
        $insertArray = [
        	[
            'name' => 'ოქრომჭედლობა',
            ],
            [
            'name' => 'ტიხრული მიმანქარი',
            ],            
        ];
        DB::table('kinds')->insert($insertArray);
    }
}
