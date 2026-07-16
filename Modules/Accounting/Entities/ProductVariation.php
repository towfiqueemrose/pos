<?php

namespace Modules\Accounting\Entities;

use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at', 'created_by'];

    public function variations()
    {
        return $this->hasMany(\App\Variation::class);
    }

    public function variation_template()
    {
        return $this->belongsTo(\App\VariationTemplate::class);
    }
}
