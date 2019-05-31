<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //These are the attributes/fields of the posts table.
    protected $fillable = ['id', 'fname', 'sname', 'sex', 'amount', '_token'];
}
