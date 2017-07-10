<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Payments extends Model
{    //
    public function getPayments() {
        $payments = Payments::find(1) -> with('user') -> get();
        dd($payments);
        return $payments;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user() {

        return $this->belongsTo('App\User','user_id',  'id', 'name');
    }
}

