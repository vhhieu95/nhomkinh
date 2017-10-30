<?php

namespace App\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes, Sluggable;
    
    /**
     * Declare table
     *
     * @var string $tabel table name
     */
    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var string $fillable
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
    */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
