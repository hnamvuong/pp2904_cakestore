<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BillDetail;
use App\Models\Customer;

class Bill extends Model
{
    protected $table = 'bills';

    protected $fillable = [
    	'id',
    	'id_customer',
    	'date_oder',
    	'total',
    	'payment',
    	'note',
    ];

    public function bill_detail() {
    	return $this->hasMany(BillDetail::class, 'id_bill', 'id');
    }

    public function customer() {
    	return $this->belongsTo(Customer::class, 'id_customer', 'id');
    }
}
