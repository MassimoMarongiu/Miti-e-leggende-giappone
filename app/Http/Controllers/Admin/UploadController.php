<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $filename = time()."-ws.".$request->file('image')->getClientOriginalExtension();
        echo $request->file('image')->storeAs('./public/img/uploads',$filename);
    }
}
