<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = [
    	'type',
    ]; 

    //relationships

    /**
     * users
     * 
     */
    public function users()
    {
    	return hasMany(User::class,'role_id'); 
    }

}
