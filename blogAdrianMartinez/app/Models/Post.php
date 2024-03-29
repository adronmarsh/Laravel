<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Writer;

class Post extends Model
{
    use HasFactory;

    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
