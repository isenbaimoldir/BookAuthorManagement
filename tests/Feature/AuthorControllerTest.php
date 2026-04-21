<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthorControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_author_can_be_created()
    {
        $response = $this->post('/authors', [
            'name' => 'mister',
            'surname' => 'shithead',
            'birthdate' => '2020-02-02'
        ]);

        $this->assertDatabaseHas('authors', [
            'name' => 'mister',
            'surname' => 'shithead'
        ]);

        $response->assertRedirect(route('authors.index'));
        $response->assertStatus(302);
    }
}
