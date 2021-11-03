<?php

namespace Minhquang\Contact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $primaryKey = 'id';
    protected $fillable =['name','email','mess'];

}
