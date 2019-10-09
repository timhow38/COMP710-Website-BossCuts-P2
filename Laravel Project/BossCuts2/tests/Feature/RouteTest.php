<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;

/** Add [ $this->withoutExceptionHandling(); ] to test for more info */

class RouteTest extends TestCase
{ 
    use RefreshDatabase;
    /** Test Defualt Login Route */
    public function test01_route_login()
    {
        $response = $this->get('/')
        ->assertRedirect('/admin/home');
    }
    /** Test Auth when changing route */
    public function test02_route_auth_client()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory(User::class)->create());
        $response = $this->get('/')
        ->assertOk();
    }
}
