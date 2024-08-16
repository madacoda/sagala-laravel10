<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    function test_article_index(): void
    {
        $response = $this->getJson('/api/article');

        $response->assertStatus(200);
    }

    function test_article_store(): void
    {
        $response = $this->postJson('/api/article', [
            'author' => 'John Doe',
            'title'  => 'Hello World',
            'body'   => 'This is a test article'
        ]);

        $response->assertStatus(200);
    }

    function test_article_index_search_author(): void
    {
        $response = $this->getJson('/api/article?author=John Doe');

        $response->assertStatus(200);
    }

    function test_article_index_search_title(): void
    {
        $response = $this->getJson('/api/article?title=Hello World');

        $response->assertStatus(200);
    }

    function test_article_index_search_body(): void
    {
        $response = $this->getJson('/api/article?body=This is a test article');

        $response->assertStatus(200);
    }

    function test_article_store_validation(): void
    {
        $response = $this->postJson('/api/article', [
            'author' => 'John Doe',
            'title'  => 'Hello World'
        ]);

        $response->assertStatus(422);
    }

    function test_article_store_response(): void
    {
        $data = [
            'author' => 'John Doe',
            'title'  => 'Hello World',
            'body'   => 'This is a test article'
        ];

        $response = $this->postJson('/api/article', $data);

        $response->assertJson([
            'status'  => 'success',
            'data'    => $data,
            'message' => 'Data stored successfully'
        ]);
    }

    function test_article_index_stress(): void
    {
        for ($i = 0; $i < 60; $i++) {
            $response = $this->getJson('/api/article');

            $response->assertStatus(200);
        }
    }
}
