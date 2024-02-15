<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_id';
    protected $fillable = ['product_id', 'name', 'description', 'PublishStatus', 'category_id', 'price', 'weight', 'img_url'];

    public $timestamps = false;

    public function Categories()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'category_id');
    }

}
