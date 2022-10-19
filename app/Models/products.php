<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $guarded = [];  
    public function custom_invoices_products()
    {
        return $this->hasMany(custom_invoices_products::class);
    }
    public function product_categories()
    {
        return $this->belongsTo(product_categories::class, 'product_category_id');
    }
}
