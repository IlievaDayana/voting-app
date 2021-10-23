<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Http\Livewire\IdeaShow;
use App\Models\User;
use App\Models\Idea;
use App\Models\Status;
use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class IdeaTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function can_check_if_idea_is_voted_for_by_user()
    {
        $user = User::factory()->create();
        $userB = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);

        $statusOpen = Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);

        $idea = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusOpen->id,
            'title' => 'My First Idea',
            'description' => 'Description for my first idea',
        ]);


        Vote::factory()->create([
            'idea_id' => $idea->id,
            'user_id' => $user->id,
        ]);

        // act
        $this->assertTrue($idea->isVotedForByUser($user));
        $this->assertFalse($idea->isVotedForByUser($userB));
        $this->assertFalse($idea->isVotedForByUser(null));
    }
}
