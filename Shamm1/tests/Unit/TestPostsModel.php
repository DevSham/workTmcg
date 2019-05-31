<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestPostsModel extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    /** @test */
    public function testName()
    {
       // $this->assertTrue(true);
       //create user
       $user=Posts::create(['id'=>'1','fname'=>'shamim', 'sname'=>'Nakayiza', 'sex'=>'female','amount'=>'10000']);
       $this->assertEquals('Na', $user->sname);
    }
}
