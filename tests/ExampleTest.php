<?php

//namespace ExampleTest;

//use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing;

class ExampleTest extends TestCase
{

    //use Testing;
    use Testing\DatabaseMigrations;
    //use Testing\withoutMiddleware;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }

    public function testAdmin()
    {

        $brandon = factory('App\User')->create(['name' => 'Brandon']);

        $this->actingAs($brandon)
             ->visit('admin')
             ->see('Hello Brandon');
    }
}
