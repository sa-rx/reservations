<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
 
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function comments(){
      return $this->hasMany(Comment::class);
    }

    public function opinions(){
      return $this->hasMany(Opinion::class);
    }
    public function contacts(){
      return $this->hasMany(Contact::class);
    }

    public function reservations(){
      return $this->hasMany(Reservation::class);
    }



    public function roles(){
      return $this->belongsToMany(Role::class, 'user_role',
              'user_id',
              'role_id');
    }


    public function hasAnyRole($roles){
        if (is_array($roles)){
           foreach ($roles as $role) {
             if ($this->hasRole($role)) {
               return true;
             }
           }
          }else{
             if ($this->hasRole($roles)) {
               return true;
            }
          }
        }




        public function hasRole($role){
          if ($this->roles()->where('name',$role)->first()) {
            return true;
          }
          return false;
        }


}
