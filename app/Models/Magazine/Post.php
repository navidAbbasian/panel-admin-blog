<?php

namespace App\Models\Magazine;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $table = 'mag_posts';

    protected $fillable = [
        'title',
        'meta_title',
        'meta_desc',
        'abstracted',
        'body',
        'slug',
        'published',
        'published_date',
        'source',
        'source_link',
        'chief_select',
        'embed',
        'alt',
        'type',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'mag_posts_categories', 'post_id', 'category_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'mag_posts_tags', 'post_id', 'tag_id');
    }
}
