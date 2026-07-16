<?php

namespace Modules\Essentials\Entities;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at', 'created_by'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'essentials_documents';
}
