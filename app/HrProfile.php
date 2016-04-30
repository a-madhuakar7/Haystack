<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class HrProfile extends Model
{
    //
    protected $fillable = [
    	'user_id'
		'email'
		'ic_new'
		'ic_old'
		'passport_no'
		'division'
		'department'
		'unit'
		'designation'
		'address'
		'mailing_address'
		'mobile'
		'phone_no'
		'gender'
		'type'
		'status'
		'join_date'

    ];

    //relationships

    public function user()
    {
    	return belongsTo(User::class,'user_id'); 
    }
}
