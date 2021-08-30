<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{

  protected $fillable = [
    'content',
    'time',
    'address',
    'number',
    'snap',
    'inst',
    'number2',
    'snap2',
    'inst2',
    'location'
  ];

    use HasFactory;
}
