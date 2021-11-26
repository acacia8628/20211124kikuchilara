<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Share;

class ShareControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_rest()
    {
        $item = Share::factory()->create();
        $response = $this->get('/api/v1/share');
        $response->assertStatus(200);
        $response->assertJsonFragment([
            'share' => $item->share,
        ]);
    }
}
