<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Site;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateSiteTest extends TestCase
{
    use RefreshDatabase;

    public function testItCanViewListSites(): void
    {
        $this->withoutExceptionHandling();
        Site::factory()
            ->for(Category::factory()->create())
            ->create([
                'name' => 'Mi Comercio'
            ]);

        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->get(route('sites.index'));

        $response->assertOk();
        $response->assertViewIs('sites.index');
        $response->assertViewHas('sites');
    }
}
