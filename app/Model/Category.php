<?php

namespace App\Model;

use App\Model\Product;
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

    const ROW_LIMIT = 10;
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

    /**
     * Return the news configuration array for this model.
     *
     * @return array
    */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
