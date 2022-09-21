<?php

namespace App\Models;

use App\Models\author;
use App\Models\booktype;
use App\Models\publisher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class book extends Model
{
    use HasFactory;

public function publisher()
{
    return $this->belongsTo(publisher::class);
}

public function author()
{
    return $this->belongsTo(author::class);
}

public function booktype()
{
    return $this->belongsTo(booktype::class);
}



}



// 'book_type_id','id'
