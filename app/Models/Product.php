<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'collection_id', 'shop_id'];

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }
}
