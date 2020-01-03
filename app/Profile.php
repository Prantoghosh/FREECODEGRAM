<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class Profile extends Model
{
	protected $guarded=[];
    public function profileImage()
    {
    	$imagepa= ($this->image) ? $this->image : '/profile/noprofile.png';
    	return  '/storage/'. $imagepa;

    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
