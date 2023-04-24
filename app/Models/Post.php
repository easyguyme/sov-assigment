<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Stevebauman\Purify\Facades\Purify;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'content',
        'excerpt',
        'status',
    ];

    /**
     * Post belongs to User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
      return  $this->belongsTo(User::class,'user_id');
    }



//    clean the html content to prevent malicious code injection
    public function setContentAttribute($value)
    {
        $this->attributes['content'] = Purify::clean($value);
    }

    public function setExcerptAttribute($value)
    {
        $this->attributes['excerpt'] = Purify::clean($value);
    }

//handle unique slug generation
    public function getSlugAttribute()
    {
        $slug = Str::slug($this->title);
        $count = 0;

        // check if the slug already exists in the database
        while (static::where('slug', $slug)->where('id', '!=', $this->id)->exists()) {
            $count++;
            $slug = Str::slug($this->title) . '-' . $count;
        }

        return $slug;
    }

//    make sure a created or updated post belongs to the signed in creator
    public static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->user_id = Auth::id()??1;
            $post->slug = $post->getSlugAttribute();
        });

        static::updating(function ($post) {
            // Ensure that the user_id field is not modified during an update
            $post->user_id = $post->getOriginal('user_id');
            $post->slug = $post->getSlugAttribute();
        });
    }
}
