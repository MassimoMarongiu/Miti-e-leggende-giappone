<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\MitiELeggende;
use App\Models\Admin\Sardegna;

class HomeController extends Controller
{
    public function index()
    {
        $data = MitiELeggende::all();
        // $sardegna = Sardegna::all();
        // $mitiEleggende = MitiELeggende::all();

        // $data = [
        //     'sardegna' => $sardegna,
        //     'mitiEleggende' => $mitiEleggende,
        // ];

        return response()->json($data);
    }
}
