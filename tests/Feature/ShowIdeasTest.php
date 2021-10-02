<?php

namespace Tests\Feature;
use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function list_of_ideas_shows_on_main_page(){


        // arrange
        $ideaOne = Idea::factory()->create([
            'title'=>'My First Idea',
            'description'=>'Description of my first idea',
        ]);

        $ideaTwo = Idea::factory()->create([
            'title'=>'My Second Idea',
            'description'=>'Description of my second idea',
        ]);
        
        // act
        $response = $this->get(route('idea.index'));

        // assert
        $response->assertSuccessful();
        $response->assertSee($ideaOne->title);
        $response->assertSee($ideaTwo->title);
        $response->assertSee($ideaOne->description);
        $response->assertSee($ideaTwo->description);
    }

    /** @test */
    public function single_idea_shows_on_main_page(){


        // arrange
        $idea = Idea::factory()->create([
            'title'=>'My First Idea',
            'description'=>'Description of my first idea',
        ]);
        
        // act
        $response = $this->get(route('idea.show',$idea));

        // assert
        $response->assertSuccessful();
        $response->assertSee($idea->title);
        $response->assertSee($idea->description);
    }

    /** @test */
    public function ideas_pagination_works(){
        Idea::factory(Idea::PAGINATION_COUNT+1)->create();

        $ideaOne = Idea::find(1);
        $ideaOne->title = "My First Idea";
        $ideaOne->save();

        $ideaEleven = Idea::find(11);
        $ideaEleven->title = "My Eleventh Idea";
        $ideaEleven->save();

        $response =$this->get('/');

        $response->assertSee($ideaOne->title);
        $response->assertDontSee($ideaEleven->title);

        $response =$this->get('/?page=2');

        $response->assertDontSee($ideaOne->title);
        $response->assertSee($ideaEleven->title);
    }
}
