<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SeederTest extends TestCase
{
    public function testMyEventsTable()
    {
      factory(App\MyEvent::class)->create(['url'=>'barcitizen.nl']);
      $this->seeInDatabase('events', ['url' => 'barcitizen.nl']);
    }
}
