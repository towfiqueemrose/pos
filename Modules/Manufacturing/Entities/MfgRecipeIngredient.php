<?php

namespace Modules\Manufacturing\Entities;

use Illuminate\Database\Eloquent\Model;

class MfgRecipeIngredient extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at', 'created_by'];

    /**
     * Get the variations associated with the ingredient.
     */
    public function variation()
    {
        return $this->belongsTo(\App\Variation::class, 'variation_id');
    }

    /**
     * Get the unit associated with the ingredient.
     */
    public function sub_unit()
    {
        return $this->belongsTo(\App\Unit::class, 'sub_unit_id');
    }

    /**
     * Get the ingredient group associated with the ingredient.
     */
    public function ingredient_group()
    {
        return $this->belongsTo(\Modules\Manufacturing\Entities\MfgIngredientGroup::class, 'mfg_ingredient_group_id');
    }
}
