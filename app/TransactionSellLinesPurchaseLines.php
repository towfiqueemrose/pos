<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionSellLinesPurchaseLines extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    public function purchase_line()
    {
        return $this->belongsTo(\App\PurchaseLine::class, 'purchase_line_id');
    }
}
