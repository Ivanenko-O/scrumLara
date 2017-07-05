<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Payments extends Model
{    //

    public function getAllPayments() {
        $payments = Payments::find(1)->user;
//        dd($payments);
        return $payments;
    }

    public function getUserPayments(){

    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user() {
        return $this->belongsTo('App\User', 'id', 'user_id');
    }
}
