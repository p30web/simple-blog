<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\MediaLibrary\Conversions\Conversion;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\FileAdder;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


/**
 * @property mixed $content
 * @property mixed $title
 */
class Post extends Model implements HasMedia
{
    use HasFactory , SoftDeletes , InteractsWithMedia;

    protected $table = "posts";

    protected $fillable = [
        'title',
        'content',
        'author_id',
        'status',
    ];

    public function registerMediaConversions(Media $media = null):void {
        $this->addMediaConversion('thumb')
            ->width(100)
            ->height(100)
            ->performOnCollections('post_collection');
    }

    public function author(){
        return $this->hasOne(User::class,  'author_id', 'id');
    }

}
