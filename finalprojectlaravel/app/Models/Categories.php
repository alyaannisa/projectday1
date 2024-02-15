<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'category_id';
    protected $fillable = [
        'category_id', 'name', 'parent_id', '_token'
    ];
}
