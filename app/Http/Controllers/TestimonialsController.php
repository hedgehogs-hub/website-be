<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function show()
    {
        $data =DB::table('testimonials')->get();
        return $data;
    }
}
