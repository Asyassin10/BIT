<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = "categorie_id";
    protected $fillable = ["categorie_name", "categorie_parent_id"];
    public function referenceCategory()
    {
        return $this->belongsTo(Category::class, "categorie_parent_id");
    }
    public function articles(){
        return $this->hasMany(Article::class,"categorie_id");
    }
}
