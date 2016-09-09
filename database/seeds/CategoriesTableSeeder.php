<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        $insertArray = [
        	[
            'name' => 'საყურე',
            ],
            [
            'name' => 'ბეჭედი',
            ],   
            [
            'name' => 'გულსაკიდი',
            ],   
            [
            'name' => 'ყელსაბამი',
            ],
            [
            'name' => 'სამაჯური',
            ], 
            [
            'name' => 'ექსკლუზივი',
            ],            
        ];
        DB::table('categories')->insert($insertArray);
    }
}
