<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DiaDiem;
use App\Tour;

class DisplayViewDestination_Customer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $diadiem = DiaDiem::where('tenDiaDiem', 'like', "%$search%")->get();
        $anhDiaDiem = DiaDiem::take(1)->first();
        return view('displayViewDestination_Customer.diadiem', [
            'diadiem' => $diadiem,
            'anhDiaDiem' => $anhDiaDiem,
            'search' => $search
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diadiem = DiaDiem::find($id);
        $tenDiaDiem = $diadiem->tenDiaDiem;

        $tour = Tour::where('nameTour', 'like', "%$tenDiaDiem%")->get();
        $anhTour = Tour::take(1)->first();
        return view('displayViewDestination_Customer.show', [
            'tour' => $tour,
            'anhTour' => $anhTour
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
