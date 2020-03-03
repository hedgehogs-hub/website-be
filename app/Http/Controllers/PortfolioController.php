<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function show(Request $request)
    {
        $perPage = $request->get('per_page', 4);
        $data =DB::table('portfolio')->paginate($perPage);
        return $data;
    }
}
