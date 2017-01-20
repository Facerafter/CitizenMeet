<?php
namespace App\Http\Controllers;

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class MapController extends Controller
{

    public function index()
    {
        Mapper::map(0, 0,['zoom'=>3, 'marker'=>false]);

        return view('eventmap');
    }

}
