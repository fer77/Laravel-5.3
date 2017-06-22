<?php

use App\Events\UserBecameForeverSupporter;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function it_fakes_events()
    {
        Event::fake();
        // Trigger the event.
        $this->visit('/events');

        $user = App\User::first();

        Event::assertFired(UserBecameForeverSupporter::class, function($e) use ($user) {
            return $e->user->id == $user->id;
        });
    }
}
