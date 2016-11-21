<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
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
        return view('country_create');
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
            'country' => 'required|min:3|max:200|unique:countries,name',
        );
        $this->validate($request, $rules);
      
        $country = new Country();
        $country->name = $data['country'];
        $country->save();

        return redirect('admin')->withMessage('Country added!');
    }
}
