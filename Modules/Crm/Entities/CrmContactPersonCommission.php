<?php

namespace Modules\Crm\Entities;

use Illuminate\Database\Eloquent\Model;

class CrmContactPersonCommission extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at', 'created_by'];
}
