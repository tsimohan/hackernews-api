<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {
    protected $fillable = [
        'title', 'description', 'username', 'item_type', 'url', 'time_stamp', 'score'
    ];
}
