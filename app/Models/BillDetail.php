<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Bill;

class BillDetail extends Model
{
    protected $table = 'bill_details';

    protected $fillable = [
    	'id',
    	'id_bill',
    	'id_product',
    	'quantity',
    	'unit_price',
    ];

    public function product() {
    	return $this->belongsTo(Product::class, 'id_product', 'id')->withTrashed();
    }

    public function bill() {
    	return $this->belongsTo(Bill::class, 'id_bill', 'id');
    }
}
