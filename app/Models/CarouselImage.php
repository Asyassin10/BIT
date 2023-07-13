<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselImage extends Model
{
    use HasFactory;
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'carousel_image_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'carousel_image_full_name',
        'carousel_title',
        'carousel_desc',
        'carousel_footer',
        'carousel_footer_link',
        'carousel_image_logo_fullname_webp',
        'carousel_image_logo_fullname',
    ];
}
