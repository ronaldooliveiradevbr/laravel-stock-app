<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductsGetTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_user_should_see_a_list_of_products()
    {
        factory('Stock\Core\Product')->create(['name' => 'Smart TV']);
        factory('Stock\Core\Product')->create(['name' => 'Microwave']);
        factory('Stock\Core\Product')->create(['name' => 'Tablet']);

        $response = $this->get('/');

        $response->assertStatus(200)
             ->assertSee('Products')
             ->assertSee('Smart TV')
             ->assertSee('Microwave')
             ->assertSee('Tablet');
    }

    public function test_user_should_see_product_details()
    {
        $product = factory('Stock\Core\Product')->create();

        $response = $this->get('/1');

        $response->assertStatus(200)
            ->assertSee($product->name)
            ->assertSee($product->price);
    }
}

