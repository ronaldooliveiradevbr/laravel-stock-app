<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductsListTest extends TestCase
{
    public function test_a_user_should_see_a_product_list()
    {
        $response = $this->get('/');

		$response->assertStatus(200)
			->assertSee('Products')
			->assertSee('Fridge')
			->assertSee('Oven')
			->assertSee('Couch');
    }
}

