<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->truncate();
        $insertArray = [
        	[
            'name' => 'თამუნა წნორელი',
            ],
            [
            'name' => 'ნათია ნებიერიძე',
            ],
        ];
        DB::table('authors')->insert($insertArray);
    }
}
