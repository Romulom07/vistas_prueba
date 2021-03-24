<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'subcategory_id', 'name'
  ];


  

    public function subcategories()
    {
      return $this->belongsTo(SubCategory::class);
    }
}
