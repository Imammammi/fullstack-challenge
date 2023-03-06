<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_api_returns_users_list(): void
    {
        $response = $this->getJson('/api/users');
        $response->assertJson(User::all()->toArray());
    }
}
