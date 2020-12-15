<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class adminPageTest extends TestCase
{

    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    public function addNewCategoryButtonRedirects()
    {
        $this->visit('/admin')
            ->click('add a new category')
            ->seePageIs('/admin/new-category');
    }

}
