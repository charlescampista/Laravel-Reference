<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;

class HouseController extends Controller
{
    public function index()
    {
        $parameters = [
            'title' => 'Your Content Goes Right Here',
        ];

        /*$dbHouses = [
        [
        'name' => 'Beautiful House',
        'type' => 'Moutain House',
        'description' => 'An amazing house on top of the mountains,
        you can see the sunrise from inside in many different angles',
        'image-path' => 'https://static1.squarespace.com/static/5460030fe4b08f1a46593d12/546436a1e4b0b870cde9322a/54ac659ae4b0ac4256f73c2d/1428543828253/Mountain+House+final+images+001.jpg'
        ],
        [
        'name' => 'Luxurious Beach House',
        'type' => 'Beach House',
        'description' => 'Wonderful House, Wonderful View.',
        'image-path' => 'http://images6.fanpop.com/image/photos/41400000/beautiful-each-homes-greyswan618-41486622-1152-600.jpg'
        ],
        [
        'name' => 'Perfec Loft For Single Ones',
        'type' => 'Loft',
        'description' => 'A compact an stylish loft, easy to decorate,
        pratical and confortble.',
        'image-path' => 'https://cdngeneral.rentcafe.com/dmslivecafe/3/786729/San%20Pedro%20Bank%20Lofts-01-DXO(2).jpg'
        ],
        [
        'name' => 'Mansion at Litoral',
        'type' => 'Mansion',
        'description' => 'The most amazing rooms ever made',
        'image-path' => 'https://s.abcnews.com/images/Lifestyle/johnny-carson-mansion-ht-jpo-04-171016_3x2_992.jpg'
        ],
        ];*/

        $dbHouses = House::all();

        return view('locations/house', [
            'parameters' => $parameters,
            'dbHouses' => $dbHouses,
        ]);
    }
}
