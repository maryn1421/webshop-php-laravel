<?php

namespace Tests\Feature;

use App\Models\product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class urlTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testMainPage() {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAdminPage() {
        $response = $this->get('/admin');

        $response->assertStatus(200);
    }

    public function testNewCategory() {
        $response = $this->get('/admin/new-category');

        $response->assertStatus(200);
    }
    public function testNewProduct() {
        $response = $this->get('/admin/new-product');

        $response->assertStatus(200);
    }

    public function testSingleProduct() {

        $product = product::all()->random();

        $response = $this->get("/product/" .  $product->id);

        $response->assertStatus(200);
    }








}
