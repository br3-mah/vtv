<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'cover_image',
        'caption_title',
        'sub_headline',
        'media_type',
        'season',
        'episode',
        'broadcast_channel',
        'media_file',
        'media_path',
        'media_external_link_path',
        'background_desc',
        'status_id',
        'price',
    ];

}
