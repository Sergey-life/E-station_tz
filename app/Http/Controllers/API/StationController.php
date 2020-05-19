<?php

namespace App\Http\Controllers\API;

use App\Station;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StationRequest;
use Illuminate\Support\Facades\DB;

class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = DB::table('stations');

        if ($request->filled('city')) {
            $query->where('city', $request->get('city'));
        }

        if ($request->filled('state')) {
            $query->where('state', $request->get('state'));
        }

        return $stations = $query->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StationRequest $request)
    {
        $station = new Station();
        $station->city = $request->city;
        $station->name = $request->name;
        $station->state = $request->state;
        $station->save();

        return $station;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Station::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $station = Station::findOrFail($id);
        $station->city = $request->city;
        $station->name = $request->name;
        $station->state = $request->state;
        $station->update();

        return $station;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $station = Station::findOrFail($id);
        $station->delete();

        return "Record deleted!";
    }
}
