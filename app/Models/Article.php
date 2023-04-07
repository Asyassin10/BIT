<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $primaryKey="article_id";
    protected $fillable = ["article_text","article_slug","categorie_id"];
}
