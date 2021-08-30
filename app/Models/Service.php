<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  protected $fillable = [
    'service_name',
    'price',
    'offer_price',
    'conten',
    'url'
  ];

  public function reservation(){
    return $this->hasOne(Reservation::class);
  }

  public function comments(){
    return $this->hasMany(Comment::class);
  }

  public function tools(){
  return $this->belongsToMany(Tool::class, 'service_tool',
        'service_id',
        'tool_id');
  }
}
