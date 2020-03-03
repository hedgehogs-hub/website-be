<?php

namespace App\Http\Controllers;
use App\TeamMembers;
use App\Http\Resources\TeamMembers as TeamResource;
use DB;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function get(Request $request)
    {
        $message = new TeamMembers();
        $messages = $message->all();
        return TeamResource::collection($messages);
    }
}
