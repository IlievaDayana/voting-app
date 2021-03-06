<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Http\Livewire\IdeaIndex;
use App\Models\User;
use App\Models\Idea;
use App\Models\Status;
use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class VotesIndexPageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function show_page_contains_idea_livewire_component()
    {
        $user = User::factory()->create();

        $categoryOne = Category::factory()->create(['name'=>'Category 1']);

        $statusOpen = Status::factory()->create(['name'=>'Open','classes'=> 'bg-gray-200']);

        $idea = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusOpen->id,
            'title' => 'My First Idea',
            'description' => 'Description for my first idea',
        ]);

        $this->get(route('idea.index',$idea))
            ->assertSeeLivewire('idea-index');

    }

    /** @test */
    public function idex_page_contains_correct_ideas_count()
    {
        $user = User::factory()->create();
        $userB = User::factory()->create();

        $categoryOne = Category::factory()->create(['name'=>'Category 1']);

        $statusOpen = Status::factory()->create(['name'=>'Open','classes'=> 'bg-gray-200']);

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

        Vote::factory()->create([
            'idea_id' => $idea->id,
            'user_id' => $userB->id,
        ]);

        // act
        $response = $this->get(route('idea.index',$idea));

        // assert
        $response->assertViewHas('ideas', function ($ideas){
            return $ideas->first()->votes_count == 2;
        });
    }
       /** @test */
    public function votes_count_shows_correctly_on_index_page_livewire_component()
    {
        $user = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);

        $statusOpen = Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);

        $idea = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusOpen->id,
            'title' => 'My First Idea',
            'description' => 'Description for my first idea',
        ]);

        Livewire::test(IdeaIndex::class, [
            'idea' => $idea,
            'votesCount' => 5,
        ])
        ->assertSet('votesCount', 5);
    //    ->assertSeeHtml('<div class="font-semibold text-2xl">5</div>')
    //    ->assertSeeHtml('<div class="text-sm font-bold leading-none">5</div>');
    }
}
