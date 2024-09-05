<?php

namespace Database\Seeders;

use App\Models\Archive;
use Illuminate\Database\Seeder;

class ArchiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = Archive::factory()->count(100)->create();
    }
}
