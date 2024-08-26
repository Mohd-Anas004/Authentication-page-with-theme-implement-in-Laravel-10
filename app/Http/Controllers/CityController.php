<?php

namespace App\Http\Controllers;

use App\Http\Controllers\StateController;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function createCity()
    {
        $state = State::where('status', 'active')->get();
        return view('city.create ', compact('state'));
    }
    public function uploadCity(Request $request)
    {
        $city = new City();
        $city->name = $request->city;
        $city->state = $request->state;
        $city->status = $request->status;
        $city->save();
        return redirect()->route('citydashboard');
    }
    public function index(Request $request)
    {

        $data = City::all();

        return view('city.citydashboard ', compact('data'));
    }
    public function editCity($id)
    {
        $state = State::where('status', 'active')->get();
        $data = City::find($id);
        // dd($data);


        return view('city.edit ', compact('data', 'state'));
    }
    public function updateCity(Request $request, $id)
    {
        $data = City::find($id);
        $data->name = $request->city;
        $data->state = $request->state;
        $data->status = $request->status;
        $data->save();
        return redirect()->route('citydashboard');
    }
    public function deleteCity($id)
    {
        City::destroy($id);
        return redirect()->route('citydashboard');
    }
}
