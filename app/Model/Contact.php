<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;
    /**
     * Declare table
     *
     * @var string $tabel table name
     */
    protected $table = 'contacts';

    /**
     * The attributes that are mass assignable.
     *
     * @var string $fillable
     */
    protected $fillable = [
        'name', 'email', 'phone', 'subject', 'content'
    ];
}
