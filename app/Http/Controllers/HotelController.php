<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hotels', array('hotels_title' => 'Hotels', 'hotels' => Hotel::all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all()->map(function ($country) {
            return ['name'=>$country->name, 'cities' => $country->cities->pluck('name', 'id')];
        })->pluck('cities', 'name')->toArray();
        return view('hotel_create', array('countries' => $countries));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        $rules = $rules = array(
            'name' => 'required|min:3|max:250',
            'description' => 'required|min:3',
            'city' => 'required|exists:cities,id',
            'stars' => 'required|integer|min:0|max:5',
            'price_single' => 'required|numeric',
            'price_double' => 'required|numeric',
            'price_triple' => 'required|numeric',
            'image_small' => 'required|image|mimes:jpeg',
            'image_large' => 'required|image|mimes:jpeg',
        );
        
        $this->validate($request, $rules);
        
        $hotel = new Hotel();

        $hotel->name = $data['name'];
        $hotel->description = $data['description'];
        $hotel->city()->associate(City::find($data['city']));
        $hotel->stars = $data['stars'];
        $hotel->price_single = $data['price_single'];
        $hotel->price_double = $data['price_double'];
        $hotel->price_triple = $data['price_triple'];

        $hotel->save();

        $images = $hotel->images();
        $file = $request->file('image_small')->move($images['server_path'], $images['image_small']);
        $file = $request->file('image_large')->move($images['server_path'], $images['image_large']);

        return redirect()->action('HotelController@show', array($hotel->id))->withMessage('Successfully added new hotel!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('hotel_show', array('hotel' => Hotel::findOrFail($id)));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexByCountry()
    {
        return view('countries', array('countries' => Country::all()));
    }
    
}
