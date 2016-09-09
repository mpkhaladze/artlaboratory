<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('photos')->truncate();
        $insertArray = [
            'fileName' => 'http://static.livedemo00.template-help.com/wt_58937/images/product-01-original.jpg',
            'item_id' => 1,     
        ];
        DB::table('photos')->insert($insertArray);
    }
}
