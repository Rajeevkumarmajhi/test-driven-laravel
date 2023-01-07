<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BlogTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * Store Post Test
     *
     * @return void
     */
    public function test_store_post()
    {

        // $this->withoutExceptionHandling();

        $post = Post::factory()->create()->toArray();

        $response = $this->post('post',$post);

        $response->assertStatus(200);
    }

}
