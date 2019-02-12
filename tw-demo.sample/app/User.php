<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','location','age','company_school'
    ];
   

    public function follows()
    {
        return $this->hasmany('App\Follow','user_id','id');
        //hasmany(紐ずけたいテーブル,紐ずけたいID受,紐ずけたいID主)
        // return $this->hasmany('App\Follow','user_id','id')
        // ->where(['follows.user_id' => Auth::id()]);
    }

}    