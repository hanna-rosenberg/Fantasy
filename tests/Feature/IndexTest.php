<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexTest extends TestCase
{
    public function test_view_index()
    {
        $response = $this->get('/');
        $response->assertSeeText('Who are you?');
        $response->assertStatus(200);
    }
}
