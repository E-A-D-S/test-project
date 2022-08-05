<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_product()
    {
            $this->actingAs($product);

        $response = $this->get('/products');

        $response->assertStatus(200);
    }

    public function test_create_product()
    {
            $response = $this->post('/login/create', [
            'name' => 'bola do chaves',
            'description' => 'bola redonda',
            'category' => 'bola',
            'color' => 'verde',
            'size' => '25',
            'brand' => 'adidas',
            'cost' => 10,
            'sale' => 20,
            'image' => "https://images.pexels.com/photos/1000084/pexels-photo-1000084.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",
            'code_bars' => '08007000',
        ]);

        $response ->assertStatus(200);
    }
            
 }
    