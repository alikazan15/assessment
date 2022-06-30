<?php

namespace App\Models;
use App\Scopes\EnableScope;
use App\Scopes\DisableScope;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $casts = [
        'is_enabled' => 'boolean'
    ];

    protected $attributes = [
        'is_enabled' => true
    ];


      //register global scope
      protected static function boot()
      {
          parent::boot();
          static::addGlobalScope(new EnableScope);
      }
 
      protected static function booted()
      {
          parent::boot();
          static::addGlobalScope(new DisableScope);
      }

    // public function scopeIsEnabled($query)
    // {
    //     $query->where('is_enabled', 1);
    // }

    // public function scopeIsDisabled($query)
    // {
    //     $query->where('is_enabled', 0);
    // }
}
