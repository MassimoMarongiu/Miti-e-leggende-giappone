<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\MitiELeggende;
use Illuminate\Http\Request;

class MitiELeggendeControllerList extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mitiELeggendes = MitiELeggende::all();

        $data = [
            "mitiELeggendes" => $mitiELeggendes
        ];

        return view('layout.mitieleggendegiapponelist', $data);
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
     * @param  \App\Models\MitiELeggende  $mitiELeggende
     * @return \Illuminate\Http\Response
     */
    public function show(MitiELeggende $mitiELeggende)
    {

        $data = [
            "mitiELeggende" => $mitiELeggende
        ];

        return view('layout.mitieleggendegiapponedetails', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MitiELeggende  $mitiELeggende
     * @return \Illuminate\Http\Response
     */
    public function edit(MitiELeggende $mitiELeggende)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MitiELeggende  $mitiELeggende
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MitiELeggende $mitiELeggende)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MitiELeggende  $mitiELeggende
     * @return \Illuminate\Http\Response
     */
    public function destroy(MitiELeggende $mitiELeggende)
    {
        //
    }
}
