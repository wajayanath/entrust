<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hootlex\Moderation\Moderatable;

class Item extends Model
{
    use Moderatable;
    public $fillable = ['title','description','moderated_at', 'status'];
    public static $strictModeration = true;
}
