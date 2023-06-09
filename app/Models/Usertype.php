<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usertype extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['first_name', 'last_name','email', 'mobile_number'];
    protected $dates = ['deleted_at'];

}
