<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function project()
    {
        //a comment belongs to a project
        return $this->belongsTo(Project::class);
    }
}
