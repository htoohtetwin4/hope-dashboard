<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'owner_id',
        'owner_type',
        'path',
        'storage',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class, 'owner_id');
    }
}
