<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    public function test_login_form()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_user_duplication()
    {
        $user1 = User::make([
                'name' => 'Admin Admin',
                'email' => 'admin@argon.com'
        ]);

        $user2 = User::make([
            'name' => 'Rudy Uh',
            'email' => 'rudy@test.com'
    ]);

    $this->assertTrue($user1->name != $user2->name);
    }

}
