<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function show(Request $request)
    {
        $perPage = $request->get('per_page', 6);
        $data = DB::table('services')->paginate($perPage);
        return $data;
    }
}
