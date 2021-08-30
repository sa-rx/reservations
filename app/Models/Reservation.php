<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
      'name',
      'car_name',
      'number',
      'service_id',
      'time',
      'content',
      'user_id'
    ];

    public function service(){
      return $this->belongsTo(Service::class);
    }

    public function user(){
      return $this->belongsTo(User::class);
    }
}
