<?php
namespace App\Http\Controllers;

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use App\MyEvent;

class MapController extends Controller
{

    public function index()
    {
        Mapper::map(38.610398238551156, -28.256835935000026,['zoom'=>3, 'marker'=>false]);
        $events = MyEvent::where('approved', 1)->where('expired', 0)->get();
        foreach ($events as $event) {
          $geoData = Mapper::location($event->city);
          $annotation = '<i class="fa fa-map-marker" aria-hidden="true"></i> '. $event->address .', '. $event->city .'<br> <i class="fa fa-calendar" aria-hidden="true"></i> '. $event->date .'<div style="float:right;"><a href="'. $event->url .'"><i class="fa fa-link" aria-hidden="true"></i> Website</a>';
          Mapper::informationWindow($geoData->getLatitude(),$geoData->getLongitude(),$annotation,['markers'=>['animation'=>'DROP']]);
        }
        return view('eventmap');
    }

}
