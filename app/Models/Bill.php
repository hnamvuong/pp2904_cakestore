<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BillDetail;
use App\Models\Customer;
use App\Models\User;

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
        'user_id'
    ];

    public function bill_detail() {
    	return $this->hasMany(BillDetail::class, 'id_bill', 'id');
    }

    public function customer() {
    	return $this->belongsTo(Customer::class, 'id_customer', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
