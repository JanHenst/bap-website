<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
  protected $fillable = ['title', 'description', 'pub_date','image'];
}
