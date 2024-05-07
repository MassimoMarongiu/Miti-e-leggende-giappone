<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Sardegna;
use Illuminate\Http\Request;

class SardegnaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sardegnas = Sardegna::all();

        $data = [
            "sardegnas" => $sardegnas
        ];

        return view('sardegnalayout.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sardegnalayout.create');

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
     * @param  \App\Models\Sardegna  $sardegna
     * @return \Illuminate\Http\Response
     */
    public function show(Sardegna $sardegna)
    {
        $data = [
            "sardegna" => $sardegna,
        ];

        return view('sardegnalayout.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sardegna  $sardegna
     * @return \Illuminate\Http\Response
     */
    public function edit(Sardegna $sardegna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sardegna  $sardegna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sardegna $sardegna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sardegna  $sardegna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sardegna $sardegna)
    {
        //
    }
}
