<?php

namespace Tests\Feature;

use Tests\TestCase;
use Stock\Core\Product;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductsTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutExceptionHandling();
    }

    public function test_a_user_should_see_a_list_of_products()
    {
        factory(Product::class)->create(['name' => 'Smart TV']);
        factory(Product::class)->create(['name' => 'Microwave']);
        factory(Product::class)->create(['name' => 'Tablet']);

        $this->get('/products')
            ->assertStatus(200)
            ->assertSee('Products')
            ->assertSee('Smart TV')
            ->assertSee('Microwave')
            ->assertSee('Tablet');
    }

    public function test_user_should_see_product_details()
    {
        $product = factory('Stock\Core\Product')->create();

        $this->get('/products/1')
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
            '<input type="text" name="size',
            '<button type="submit',
	];

        $this->get('/products/create')
            ->assertStatus(200)
            ->assertViewIs('products.create')
	    ->assertSeeInOrder($formFields);
    }

    public function test_a_user_can_add_new_product()
    {
        $data = factory(Product::class)->make()->toArray();

	$this->post('/products', $data)
            ->assertRedirect('/products');
        $this->assertDatabaseHas('products', $data);
    }

    public function test_user_cannot_add_product_with_invalid_data()
    {
	$this->expectException(ValidationException::class);

        $this->post('/products', []);
    }

    public function test_user_can_see_edit_form()
    {
        $formFields = [
            '<input type="hidden" name="_token',
            '<input type="text" name="name',
            '<textarea name="description',
            '<input type="text" name="price',
            '<input type="text" name="quantity',
            '<input type="text" name="size',
            '<button type="submit',
	];

		$product = factory(Product::class)->create();

        $this->get('/products/'.$product->id.'/edit')
            ->assertStatus(200)
            ->assertViewIs('products.edit')
            ->assertViewHas('product', $product)
            ->assertSeeInOrder($formFields);
    }

    public function test_user_can_edit_a_product()
    {
        $product = factory(Product::class)->create();
        $formData = factory(Product::class)->make()->toArray();

        $this->put('/products/'.$product->id, $formData)
            ->assertRedirect('/products')
            ->assertSessionHas('message', $formData['name'] . ' edited successfuly!');
	$this->assertDatabaseHas('products', $formData);
    }

    public function test_user_can_delete_product()
    {
        $deleted = factory(Product::class)->create();

	$this->delete('/products/' . $deleted->id)
            ->assertRedirect('/products');
	$this->assertDatabaseMissing('products', $deleted->toArray());
    }
}

