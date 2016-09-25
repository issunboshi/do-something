<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testNonAdminUser()
    {
        $user = factory(App\User::class)->make();

        $this->be($user);
        $this->assertFalse($user->admin);

    }

    public function testAdminUser()
    {
        $user = factory(App\User::class, 'admin')->make();

        $this->be($user);
        $this->assertTrue($user->admin);
    }


}
