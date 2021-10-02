<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\Http;
class UserTest extends TestCase
{
    use RefreshDatabase;

 /** @test */
 public function user_can_generate_gravatar_default_image_when_no_email_found_first_character_0()
 {
     $user = User::factory()->create([
         'name' => 'Andre',
         'email' => '0fakeemail@fakeemail.com',
     ]);
     $gravatarUrl = $user->getAvatar();
     $this->assertEquals(
         'https://www.gravatar.com/avatar/'.md5($user->email).'?s=200&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-27.png',
         $gravatarUrl
     );
     $response = Http::get($user->getAvatar());
     $this->assertTrue($response->successful());
 }
}
