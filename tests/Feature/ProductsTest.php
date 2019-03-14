<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductsTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_user_should_see_a_list_of_products()
    {
        factory('Stock\Core\Product')->create(['name' => 'Smart TV']);
        factory('Stock\Core\Product')->create(['name' => 'Microwave']);
        factory('Stock\Core\Product')->create(['name' => 'Tablet']);

        $this->get('/')
            ->assertStatus(200)
            ->assertSee('Products')
            ->assertSee('Smart TV')
            ->assertSee('Microwave')
            ->assertSee('Tablet');
    }

    public function test_user_should_see_product_details()
    {
        $product = factory('Stock\Core\Product')->create();

        $this->get('/1')
            ->assertStatus(200)
            ->assertSee($product->name)
            ->assertSee($product->price);
    }

    public function test_user_should_see_product_creation_form()
    {
        $formFields = [
            '<input type="hidden" name="_token',
            '<input type="text" name="name',
            '<textarea name="description',
            '<input type="text" name="price',
            '<input type="text" name="quantity',
            '<button type="submit',
	];

        $this->get('/create')
            ->assertStatus(200)
            ->assertViewIs('products.create')
	    ->assertSeeInOrder($formFields);
    }
}

