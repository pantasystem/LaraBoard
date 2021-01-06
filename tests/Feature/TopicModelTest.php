<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Topic;
use PHPUnit\Framework\Assert;


class TopicModelTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    
    public function testデータを作成することはできるか()
    {
        $topic = Topic::factory()->create();
        Assert::assertNotNull($topic);
    }

    public function test作成したデータが存在するかどうか()
    {
        $topic = Topic::factory()->create();
        Assert::assertNotNull($topic);
        $topic = Topic::find($topic->id);
        Assert::assertNotNull($topic);
    }

    
}
