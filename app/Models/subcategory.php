<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    use HasFactory;

    protected $fillable = [
'category_id',
'name',
'slug',
'is_active'
    ];

// every subcategory belongs to a category//

   public function category()
    {
        return $this->belongsTo(category::class);
    }
}
