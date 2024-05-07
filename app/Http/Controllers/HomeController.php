<?php

namespace App\Http\Controllers;
use App\Models\Admin\MitiELeggende;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mitieleggendegiappones = MitiELeggende::all();

        $data = [
            "mitieleggendegiappones" => $mitieleggendegiappones
        ];


        return view('home', $data);
    }
}
