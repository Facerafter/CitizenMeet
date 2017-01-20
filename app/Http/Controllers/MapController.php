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
        $events = $events->pluck('MyEventFullAddress', 'Tenant_Id');
        foreach ($events as $event) {
          $geoData = Mapper::location($event);
          Mapper:marker($geoDate[1],$geoData[2])
        }
        foreachMyEvent::find($id)->delete();

        return view('eventmap');
    }

}
