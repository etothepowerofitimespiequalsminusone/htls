<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    // Middleware
    public function __construct()
    {
        // only Admin have access
        $this->middleware('admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('city_create', array('countries' => Country::all()->pluck('name', 'id')));        
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
            'city' => 'required|min:3|max:200',
            'country' => 'required|exists:countries,id',
        );
        
        $this->validate($request, $rules);
        
        $city = new City();
        $city->name = $data['city'];
        $city->country()->associate(Country::find($data['country']));
        $city->save();

        return redirect('admin')->withMessage('City added!');
    }
}
