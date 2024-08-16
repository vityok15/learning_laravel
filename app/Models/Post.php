<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //add

class Post extends Model
{
    use HasFactory;
    use SoftDeletes; //add

    protected $table = 'posts';
    protected $guarded = false;

}
