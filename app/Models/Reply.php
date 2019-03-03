<?php

namespace App\Models;

class Reply extends Model
{
    protected $fillable = ['content'];
    public function scopeRecent($query)
	{
	    return $query->orderBy('created_at', 'desc');
	}

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}