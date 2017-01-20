<?php
namespace App\Http\Controllers;

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class MapController extends Controller
{

    public function index()
    {
        Mapper::map(38.610398238551156, -28.256835935000026,['zoom'=>3, 'marker'=>false]);

        return view('eventmap');
    }

}
