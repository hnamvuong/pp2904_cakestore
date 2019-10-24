<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;

class WishList extends Model
{   
    protected $table = 'wish_lists';

    protected $fillable = [
        'id',
        'product_id',
        'user_id',
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
