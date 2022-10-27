<?php

namespace Tests\Unit;

use Tests\TestCase;

class FirstTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertSeeText('Article Investree');
    }
}
