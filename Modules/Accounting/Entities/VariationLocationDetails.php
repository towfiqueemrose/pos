<?php

namespace Modules\Accounting\Entities;

use Illuminate\Database\Eloquent\Model;

class VariationLocationDetails extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at', 'created_by'];
}
