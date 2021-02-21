<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\User;
use App\Models\Person;

class HelloTest extends TestCase
{
    use DatabaseMigrations;

    public function testHello()
    {
        factory(User::class)->create([
            'name' => 'AAA',
            'email' => 'BBB@CCC.com',
            'password' => 'ABCABC',
        ]);
        factory(User::class, 10)->create();

        $this->assertDatabaseHas('users', [
            'name' => 'AAA',
            'email' => 'BBB@CCC.com',
            'password' => 'ABCABC',
        ]);

        factory(Person::class)->create([
            'name' => 'XXX',
            'email' => 'YYY@ZZZ.com',
            'password' => 'XYZXYZ',
        ]);
        factory(Person::class, 10)->create();

        $this->assertDatabaseHas('people', [
            'name' => 'XXX',
            'email' => 'YYY@ZZZ.com',
            'password' => 'XYZXYZ',
        ]);

    }
}
