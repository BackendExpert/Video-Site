<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoCommentM extends Model
{
    use HasFactory;
    protected $table = 'videos__comments';
    protected $primaryKey = 'id';
    protected $fillable = [       
        'video_id',
        'commenter',
        'description',
        'created_at',
        'updated_at',
    ];
}
