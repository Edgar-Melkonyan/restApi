<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'note', 'user_id'];

    protected $hidden = ['user_id'];

    /**
     * Scope a query to only include notes of a given user.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @param  int $owner
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOwner($query, $owner)
    {
        return $query->where('user_id', $owner);
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}