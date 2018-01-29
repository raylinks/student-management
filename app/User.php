<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
/*use Laravel\Passport\HasApiTokens;*/

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['firstname', 'lastname','username', 'email', 'password','sex','active','role_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public  function role()
    {
        $this->hasOne('App\Role','id', 'role_id' );
    }

    public function checkIfUserHasRole($need_role)
    {
    return (strtolower($need_role)==strtolower($this->role->name)) ? true : null;
    }

    public function hasRole($roles)
    {
        if(is_array($roles))
        {
            foreach($roles as $need_role){
                if($this->checkIfUserHasRole($need_role))
                {
                    return true;
                }
            }
        }else{
            return $this->checkIfUserHasRole($roles);
        }
        return false;
    }
}
