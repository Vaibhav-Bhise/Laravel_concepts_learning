<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title', 'body'];
    
}
