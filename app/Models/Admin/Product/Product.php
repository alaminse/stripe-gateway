<?php

namespace App\Models\Admin\Product;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Category\Category;

class Product extends Model
{
    protected $table = 'products';
    /**
     * Get the user that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
