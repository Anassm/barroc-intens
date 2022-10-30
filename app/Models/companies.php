<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    use HasFactory;
    protected $guarded = []; 

    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function notes()
    {
        return $this->hasMany(notes::class);
    }
    public function maintence_appointments()
    {
        return $this->hasMany(maintenance_appointment::class);
    }
    public function custom_invoices()
    {
        return $this->hasMany(custom_invoices::class);
    }
}
