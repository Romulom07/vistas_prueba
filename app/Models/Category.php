<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $dates = ['deleted_at'];

  protected $fillable = [
    'name', 'image'
  ];

  /**
   * Get the subcategories for the category.
   */
  public function subcategories()
  {
    return $this->hasMany(SubCategory::class);
  }
  public function marcass()
  {
    return $this->hasMany(Marca::class);
  }
  
}
