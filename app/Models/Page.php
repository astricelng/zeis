<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
     /**
     * To avoid mass assign operations
     *
     * @var array
     */
    protected $fillable = [
        'page',
        'route',
        'view_file',
        'localization_file',
        'style_file',
        'is_active',
    ];
}
