<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
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
    public function setAllocatedAmountAttribute($value)
    {
        $this->attributes['allocated_amount'] = $value * 100; 
    }

     /**
     * Convert back to currency
     *
     * @param  string  $value
     * @return string
     */
    public function getAllocatedAmountAttribute($value)
    {
        return $value/100;
    }
}
