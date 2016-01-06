<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    //
    protected $fillable = [
    	'title',
    	'description',
    	'published_at',

    ];

    public function scopePublished($query) {
    	$query->where('published_at', '<=', Carbon::now());
    }

    public function setPublishedAtAttribute($date) {
    	$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);	
    }
    /*
    * Get the tags associated with the given Channel
    *
    */
    public function tags() {
        return $this->belongsToMany('App\Tag'); //tag_id
    }
    /*
    * Get a list of tag ids associated with the current article
    *
    */
    public function getTagListAttribute() {
        return $this->tags->lists('id')->all();
    }
}
