<?php

namespace Modules\Woocommerce\Entities;

use Illuminate\Database\Eloquent\Model;

class WoocommerceSyncLog extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at', 'created_by'];
}
