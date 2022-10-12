<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class custom_invoices extends Model
{
    use HasFactory;
    public function custom_invoices_products()
    {
        return $this->hasMany(custom_invoices_products::class);
    }
    public function companies()
    {
        return $this->belongsTo(companies::class);
    }
}
