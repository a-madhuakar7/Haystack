<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserClaims extends Model
{
    //
    protected $fillable = [
    	'user_id',
    	'claim_id'
    ]; 

    /**
     * Convert to integer
     *
     * @param  string  $value
     * @return string
     */
    public function setAmount($value)
    {
        $this->attributes['amount'] = $value * 100; 
    }

     /**
     * Convert back to currency
     *
     * @param  string  $value
     * @return string
     */
    public function getAmount($value)
    {
        return $value/100;
    }
}
