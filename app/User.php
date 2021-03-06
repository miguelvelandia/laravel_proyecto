<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','created_at','updated_at','email_verified_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        
    ];

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
   

    public function blogs()
    {
        return $this->hasMany('App\Models\Blog');
    }

    public function setNameAttribute($value){

       $this->attributes['name']=ucfirst($value);
    }

    public function getFullNameAttribute(){

        return strtolower($this->name);  
     }

     public function getEmailNameAttribute(){

        return "{$this->email} {$this->email_verified_at}";  
     }
     
     public function  getListBlogAttribute(){
         return $this->blogs;
     }
    

     protected  $appends=[
        'full_name',
        'list_blog',
        'email_name'
    ];
     
}
