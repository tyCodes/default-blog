<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  // const CREATED_AT = 'creation_date';
  // const UPDATED_AT = 'last_update';

  public $fillable = [
      'title', 'body',
  ];
}
