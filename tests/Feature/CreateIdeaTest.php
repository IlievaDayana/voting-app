<?php

namespace Tests\Feature;

use App\Http\Livewire\CreateIdea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\Category;
use App\Models\Status;
use Livewire\Livewire;
use Tests\TestCase;

class CreateIdeaTest extends TestCase
{
    use RefreshDatabase;

    /** @test */

    public function create_idea_form_not_show_when_logged_out()
    {

        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();

        $response->assertSee('Start your brainstorming now!', false);
        $response->assertDontSee('Please log in to create your first idea.');
    }



    /** @test */

    public function create_idea_form_not_show_when_logged_in()
    {
        $response = $this->actingAs(User::factory()->create())->get(route('idea.index'));

        $response->assertSuccessful();

        $response->assertDontSee('Start your brainstorming now!', false);
        $response->assertSee('Please log in to create your first idea.');
    }


    /** @test */

    public function livewire_component_works()
    {
        $this->actingAs(User::factory()->create())
            ->get(route('idea.index'))
            ->assertSeeLivewire('create-idea');
    }


    /** @test */

    public function idea_validation_works()
    {
        Livewire::actingAs(User::factory()->create())
            ->test(CreateIdea::class)
            ->set('title', '')
            ->set('category', '')
            ->set('description', '')
            ->call('createIdea')
            ->assertHasErrors(['title','description','category']);
    }

        /** @test */
        public function creating_two_ideas_with_same_title_still_works_but_has_different_slugs()
        {
            $user = User::factory()->create();
    
            $categoryOne = Category::factory()->create(['name' => 'Category 1']);
            $categoryTwo = Category::factory()->create(['name' => 'Category 2']);
    
            $statusOpen = Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);
    
            Livewire::actingAs($user)
                ->test(CreateIdea::class)
                ->set('title', 'My First Idea')
                ->set('category', $categoryOne->id)
                ->set('description', 'This is my first idea')
                ->call('createIdea')
                ->assertRedirect('/');
    
            $this->assertDatabaseHas('ideas', [
                'title' => 'My First Idea',
                'slug' => 'my-first-idea'
            ]);
    
            Livewire::actingAs($user)
                ->test(CreateIdea::class)
                ->set('title', 'My First Idea')
                ->set('category', $categoryOne->id)
                ->set('description', 'This is my first idea')
                ->call('createIdea')
                ->assertRedirect('/');
    
            $this->assertDatabaseHas('ideas', [
                'title' => 'My First Idea',
                'slug' => 'my-first-idea-2'
            ]);
        }
}
