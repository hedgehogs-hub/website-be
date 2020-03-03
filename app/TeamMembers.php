<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class TeamMembers extends Model
{
    public function get()
    {
        return $this->hasMany('App\SocialAccounts', 'team_member_id', 'id');
    }
}
