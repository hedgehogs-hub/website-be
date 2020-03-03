<?php


namespace App\Http\Controllers;


use App\SocialNetwork;

class SocialNetworkController extends Controller
{
    public function get()
    {
        return SocialNetwork::all();
    }
}
