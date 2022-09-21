<?php

namespace App\Models;

use App\Models\book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class author extends Model
{
    use HasFactory;

public function books()
{
    return $this->hasMany(book::class);
}







}
