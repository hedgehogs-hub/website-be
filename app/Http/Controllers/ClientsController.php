<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;


class ClientsController extends Controller
{
    public function get()
    {
        $clients = DB::table('clients')->get();
        return $clients;
    }
}
