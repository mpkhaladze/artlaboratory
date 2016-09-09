<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");
        $this->call(MaterialsTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(StoresTableSeeder::class);
        $this->call(KindsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        
    }
}
