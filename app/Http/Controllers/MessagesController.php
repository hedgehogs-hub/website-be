<?php

namespace App\Http\Controllers;
use App\Messages;
use App\Http\Resources\Messages as MessagesResource;
use DB;
use Illuminate\Http\Request;


class MessagesController extends Controller
{
    public function get(Request $request)
    {
        $perPage = $request->get('per_page', 4);
        $message = new Messages();
        $messages = $message->all();
        return nl2br($messages);
    }
}
