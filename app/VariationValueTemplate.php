<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VariationValueTemplate extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * Get the variation that owns the attribute.
     */
    public function variationTemplate()
    {
        return $this->belongsTo(\App\VariationTemplate::class);
    }
}
