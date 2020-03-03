<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class SocialAccounts extends Model
{
    public function socialNetwork()
    {
        return $this->belongsTo('App\SocialNetwork','social_network_id','id');
    }

    public function teamMember()
    {
        return $this->belongsTo('App\TeamMembers','id','team_member_id');
    }
}
