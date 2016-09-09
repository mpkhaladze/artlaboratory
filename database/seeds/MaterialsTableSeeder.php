<?php

use Illuminate\Database\Seeder;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->truncate();
        $insertArray = [
        	[
            'name' => 'ოქრო',
            ],
            [
            'name' => 'ვერცხლი',
            ],   
            [
            'name' => 'მინანქარი',
            ],   
            [
            'name' => 'შერეული',
            ],               
        ];
        DB::table('materials')->insert($insertArray);
    }
}