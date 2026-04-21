<?php

namespace Tests\Unit;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     */
    public function test_short_title_is_stored_correctly()
    {
        $author = Author::factory()->create();

        $book = Book::create([
            'title' => 'Very good book',
            'short_title' => 'Good book',
            'year' => 2023,
            'author_id' => $author->id,
        ]);

        $this->assertEquals('Good book', $book->short_title);
    }
}
