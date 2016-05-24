<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'title',
        'slug'
    ];

    /**
     * Relation
     * @return App\Video
     */
    public function videos()
    {
        return $this->hasMany('App\Video');
    }

    /**
     * Order by Category titles
     * @param  $query
     * @return $query
     */
    public function scopeTitle($query)
    {
        return $query->orderBy('title', 'asc');
    }
}
