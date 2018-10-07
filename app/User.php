<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname' ,'email', 'number' , 'quantity' ,'from' , 'to' ,
        'item_name', 'reciever_name', 'next_of_kin', 'delivery_option', 'delivery_date', 'comment', 'weight',
    ];

}
