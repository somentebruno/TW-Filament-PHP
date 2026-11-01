<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    //
    protected $fillable = ['name', 'slug', 'description'];


    /**/
    /* Um produto pertence a uma categoria */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    public function variations(): HasMany
    {
        return $this->hasMany(ProductVariation::class);
    }
}
