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
          Mapper:marker($geoData->getLatitude(),$geoData->getLongitude());
        }
        return view('eventmap');
    }

}
