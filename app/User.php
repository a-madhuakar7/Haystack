<?php

namespace App;

use App\Role; 
use App\Claim;
use App\HrProfile; 
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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
        'password', 'remember_token',
    ];


    //relationships

    /**
     * role 
     *
     */
    public function userRole()
    {
        return belongsTo(Role::class,'role_id'); 
    }

    /**
     * role 
     *
     */
    public function hrProfile()
    {
        return hasOne(HrProfile::class,'user_id'); 
    }

    /**
     * Benefits 
     *
     */
    public function benefits()
    {
        return belongsToMany(Claim::class,'benefits'); 
    }

    /**
     * Benefits 
     *
     */
    public function usersClaims()
    {
        return belongsToMany(Claim::class,'user_claims'); 
    }
}
