<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
    	'id',
    	'name',
    	'gender',
    	'email',
    	'address',
    	'phone_number',
    	'note',
    ];

    public function bill() {
        return $this->hasMany(Bill::class, 'id_customer', 'id');
    }
}
