<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $primaryKey = 'id';
  protected $table = 'contact_us';
  public $timestamps = false;

  protected $fillable = [
    'name', 'email', 'phone_number', 'topic', 'message'
  ];
}
