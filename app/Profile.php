<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded=[];
    public function profileImage()
    {
       $imagePath=($this->image)? $this->image:'/profile/IFTKR6iloDWe7Znvzw7rz04gKB02OTgrDc4gyuCW.png';
       return '/storage/'.$imagePath;
    }
    public function cover()
    {
       $imagePath=($this->cover)? $this->cover:'../images/covers/6.jpg';
       return '/storage/'.$imagePath;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
