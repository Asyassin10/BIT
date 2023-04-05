<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = "categorie_id";
    protected $fillable = ["categorie_name", "categorie_parent_id"];
}
