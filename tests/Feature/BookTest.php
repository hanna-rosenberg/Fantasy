<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookTest extends TestCase
{
    public function test_view_book()
    {
        $response = $this->followingRedirects('/book')->post('?id=2');

        $response->assertStatus(200);
    }
}
