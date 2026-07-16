<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'crm_proposals';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at', 'created_by'];

    public function media()
    {
        return $this->morphMany(\App\Media::class, 'model');
    }
}
