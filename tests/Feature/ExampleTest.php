<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase {
    use DatabaseTransactions;

    private $user1;
    private $user2;

    protected function setUp() {
        parent::setUp();

        $this->user1 = factory(User::class)->create();
        $this->user2 = factory(User::class)->create();
        $this->actingAs($this->user1);
    }

    /** @test */
    public function users_can_follow_each_other() {
        $this->post('/follow', [
            'user_id' => $this->user2->id
        ]);

        $this->assertTrue($this->user2->isFollowedBy($this->user1));
    }

    /** @test */
    public function users_can_message_each_other() {
        $this->post('/messages', [
            'user_id' => $this->user2->id
        ]);

        $this->assertDatabaseHas('messages', [
            'from' => $this->user1->id,
            'to' => $this->user2->id
        ]);
    }
}
