<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class custom_invoice_products extends Model
{
    use HasFactory;
    public function custom_invoices()
    {
        return $this->belongsTo(custom_invoices::class);
    }
    public function products()
    {
        return $this->belongsTo(products::class);
    }
}
