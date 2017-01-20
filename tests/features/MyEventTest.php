<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MyEventTest extends TestCase
{
    public function testWeSeeAListOfMyEvents()
    {
      factory(App\MyEvent::class)->create(['url'=>'barcitizen.nl']);
      $this->visit('/')->see('barcitizen.nl');
    }
    public function testWeSeeAMyEventForm()
    {
      $this->visit('/event/create')->see('Venue City');
    }
}
