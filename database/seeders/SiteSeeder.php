<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Site;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{

    public function run(): void
    {
        Site::factory()->create();
    }
}
