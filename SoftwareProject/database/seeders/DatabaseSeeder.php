<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('public/images');
        Storage::makeDirectory('public/images');

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        $this->call(ManufacturerSeeder::class);
        $this->call(DietSeeder::class);
    }
}
