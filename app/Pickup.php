<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Pickup extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date', 'name', 'phone', 'country', 'address1', 'address2', 'postcode' , 'city' , 'province' , 'tocountry', 'toprovince', 'toname', 'tophone', 'toaddress1', 'toaddress2', 'topostcode', 'tocity', 'driverId', 'vehicleId', 'status', 'picture'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     *
     * protected $hidden = [
     *     'password', 'remember_token',
     *];
    **/

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     *
     *  protected $casts = [
     *    'email_verified_at' => 'datetime',
     * ];
     * */
}
