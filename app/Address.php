<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $fillable = ['user_id', 'country'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id'); 
        
        // if in address table foreign key for user id is user_id , u dont need to specify like 'uid'
        // uid = foreign key in address table
    }
}