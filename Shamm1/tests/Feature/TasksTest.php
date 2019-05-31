<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use  App\Posts;

class TasksTest extends TestCase
{
   //use DatabaseMigrations;
  use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
   //  public function test_create()
   //  {

   //     $response = $this->call('GET', '/posts/create');
   //     $this->get('postsPages.create');
       
   //  }
    //testing the insert data and show spacific user.
    public function test_store()
    {
    $user = Posts::create(['id'=>'5','fname'=>'shamim', 'sname'=>'Nakayiza', 'sex'=>'female','amount'=>'10000','_token'=>'']);

       $this->assertEquals('Nakayiza', $user->sname);
       //this is the page user goes to after logging in.
       $this->get('/posts.show');
       //this is the information displayed on the user's page.
       $this->assertEquals('shamim',$user->fname);
    }
    public function testUpdate()
    {
      $task = Posts::create(['id'=>'1','fname'=>'shamim', 'sname'=>'Nakayiza', 'sex'=>'female','amount'=>'10000','_token'=>'']);
      $task->fname = "shamim";
      $task->sname = "Nakayiza";
      //When the user hit's the endpoint to update the task
      $this->put('/posts/'.$task->id);
      //The task should be updated in the database.
      $this->assertDatabaseHas('posts',['id'=> $task->id , 'fname' => 'shamim', 'sname' => 'Nakayiza']);
      $res = $this->get('/posts');
      $res->assertSee($task->fname);
      $res->assertSee('Nakayiza', $task->sname);



    }


}
