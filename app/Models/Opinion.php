<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'content',
      'service_id',
      'user_id'
    ];



    public function user(){
      return $this->belongsTo(User::class);
    }
}
