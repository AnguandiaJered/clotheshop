<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Categorie;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory, SluggableScopeHelpers;

     /**

     * Return the sluggable configuration array for this model.
     *
     * @return array

     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    /**
     * @return string
     */
    public function getRoute()
    {
        $route = route('blog.show', [
            'y' => Carbon::parse($this->created_at)->format('Y'),
            'm' => Carbon::parse($this->created_at)->format('m'),
            'd' => Carbon::parse($this->created_at)->format('d'),
            'slug' => $this->slug,

        ]);

        return $route;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function authorId()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function category()
    {
        return $this->belongsTo(Categorie::class, 'category_id');
    }

    public function toFeedItem()
    {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->title)
            ->summary($this->excerpt)
            ->updated($this->updated_at)
            ->link($this->getRoute())
            ->author($this->user->name);
    }

    public static function getFeedItems()
    {
        return Post::all();
    }
}
