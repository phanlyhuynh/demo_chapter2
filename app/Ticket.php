<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Ticket extends Model
{
    //
    protected $table = 'tickets';
    protected $fillable = ['title','content','slug','status','user_id'];

    public function comments()
    {
        return $this->hasMany('App\Comment','post_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }



}
