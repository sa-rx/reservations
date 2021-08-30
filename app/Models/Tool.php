<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{

  protected $fillable = [
    'title',
    'img',
    'content'

  ];


    use HasFactory;

    public function services(){
    return $this->belongsToMany(Service::class, 'service_tool',
          'tool_id',
          'service_id');
    }




}
