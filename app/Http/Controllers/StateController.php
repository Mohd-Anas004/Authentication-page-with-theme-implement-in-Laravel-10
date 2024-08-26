<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function stateCreate()
    {
        $state = State::all();
        return view('state.create ', compact('state'));
    }
    public function stateUpload(Request $request)
    {
        $state = new State();
        $state->name = $request->state;
        $state->status = $request->status;
        $state->save();
        return redirect()->route('statedashboard');
    }
    public function index(Request $request)
    {
        $data = State::all();

        return view('state.statedashboard ', compact('data'));
    }
    public function edit($id)
    {
        $data = State::find($id);
        // dd($data);


        return view('state.edit ', compact('data'));
    }
    public function updateState(Request $request, $id)
    {
        $data = State::find($id);
        $data->name = $request->state;
        $data->status = $request->status;
        $data->save();
        return redirect()->route('statedashboard');
    }
    public function deleteState($id)
    {
        State::destroy($id);
        return redirect()->route('statedashboard');
    }
    public function import()
    {
        return view('state.import');
    }
    public function importData(Request $request)
    {
        $csv = $request->file('file');
        dd($csv);
    }
}
