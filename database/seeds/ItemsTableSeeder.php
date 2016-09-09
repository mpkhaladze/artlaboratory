<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('items')->truncate();
        $insertArray = [
            [
            'name' => 'k-1',
            'weight' => 5.4,
            'length' => 6.8,
            'width' => 2.5,
            'material_id' => 1,
            'author_id' => 1,
            'store_id' => 2,
            'kind_id' => 1,
            'category_id' => 3,           
            ],
            [
            'name' => 'k-2',
            'weight' => 1.6,
            'length' => 5.45,
            'width' => 3.45,
            'material_id' => 2,
            'author_id' => 2,
            'store_id' => 1,
            'kind_id' => 2,
            'category_id' => 2,           
            ],
        ];
        DB::table('items')->insert($insertArray);
    }
}