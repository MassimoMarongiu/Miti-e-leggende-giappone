<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\MitiELeggende;
use Illuminate\Http\Request;

class MitiELeggendeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mitieleggendegiappones = MitiELeggende::all();

        $data = [
            "mitieleggendegiappones" => $mitieleggendegiappones
        ];

        return view('layout.mitieleggendegiapponeslider', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layout.mitieleggendegiapponecreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'body' => 'required',
                'url' => 'required',
            ]
            );
            $mitieleggendegiappone = new MitiELeggende();

            $mitieleggendegiappone->title = $request->input('title');
            $mitieleggendegiappone->body = $request->input('body');
            $mitieleggendegiappone->url = $request->input('url');

            $mitieleggendegiappone->save();

            return redirect('mlg')->with('success', 'Articolo creato con successo ');
            // return redirect()->route('mlg.show')->with('success', 'Articolo creato con successo ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MitiELeggende  $mitiELeggende
     * @return \Illuminate\Http\Response
     */
    public function show(MitiELeggende $mitieleggendegiappone)
    {
        $data = [
            "mitieleggendegiappone" => $mitieleggendegiappone,
        ];

        return view('layout.mitieleggendegiapponedetails', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MitiELeggende  $mitiELeggende
     * @return \Illuminate\Http\Response
     */
    public function edit(MitiELeggende $mitieleggendegiappone)
    {
        $data = [
            "mitieleggendegiappone" => $mitieleggendegiappone,
        ];

        return view('layout.mitieleggendegiapponeedit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MitiELeggende  $mitiELeggende
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MitiELeggende $mitieleggendegiappone)
    {
       $request->validate([
           'title' => 'required',
           'body' => 'required',
           'url' => 'required',
       ]);
       $mitieleggendegiappone->title = $request->input('title');
       $mitieleggendegiappone->body = $request->input('body');
       $mitieleggendegiappone->url = $request->input('url');

       $mitieleggendegiappone->save();

       return redirect('mlg')->with('success', 'Articolo modificato  con successo ');;
       // return redirect()->route('mlg.show')->with('success', 'Articolo creato con successo ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MitiELeggende  $mitiELeggende
     * @return \Illuminate\Http\Response
     */
    public function destroy(MitiELeggende $mitieleggendegiappone)
    {
        $mitieleggendegiappone->delete();
        return redirect('mlg')->with('success', 'Articolo eliminato con successo ');

    }
}
