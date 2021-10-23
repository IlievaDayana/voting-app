<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Idea extends Model
{
    use HasFactory, Sluggable;
    
    const PAGINATION_COUNT = 10;
        /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    
    public function votes()
    {
        return $this->belongsToMany(User::class, 'votes');
    }

    public function getStatusClasses()
    {
        $allStatuses = [
            'Open' => 'bg-gray-200',
            'Closed' => 'bg-red text-white',
            'In progress' => 'bg-yellow text-white',
            'Considering' => 'bg-purple text-white',
            'Implemented' => 'bg-green text-white',

        ];
        
        return $allStatuses[$this->status->name];
    }
    public function isVotedByUser(?User $user)
    {
        if(!$user) {
            return false;
        }
        return Vote::where('user_id',$user->id)
            ->where('idea_id', $this->id)
            ->exists();
    }

}
