<?php

namespace App;

use App\User; 
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    //
    protected $fillable = [
    	'type',
    ]; 


    //relationships 


    /**
     * benefits
     *
     */
    public function benefits()
    {
    	return belongsToMany(User::class,'benefits'); 
    }

    /**
     * claims from users
     *
     */
    public function userClaims()
    {
        return belongsToMany(User::class,'user_claims'); 
    }
}
