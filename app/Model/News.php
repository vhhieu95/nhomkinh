<?php

namespace  App\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use Sluggable, SoftDeletes;

    /**
     * Declare table
     *
     * @var string $tabel table name
     */
    protected $table = 'news';

    /**
     * The attributes that are mass assignable.
     *
     * @var array $fillable
     */
    protected $fillable = [
        'title', 'content', 'category_id'
    ];
}
