<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';

    protected $fillable = [
    	'id',
    	'name',
    	'email',
    	'subject',
    	'message',
    	'id_user',
    ];
}
