<?php

namespace Tests\Unit;

use App\Models\Author;
use Tests\TestCase;

class AuthorTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_full_name_returns_correct_value()
    {
        $author = new Author([
            'name' => 'mister',
            'surname' => 'shithead',
            'birthdate' => '2020-02-02'
        ]);

        $this->assertEquals('mister shithead', $author->fullName());
    }
}
