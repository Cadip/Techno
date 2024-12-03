<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'opening_hours', 'contact', 'rating', 'description'];

    public function tables()
    {
        return $this->hasMany(Table::class);
    }
}
