<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Basket extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function person(){
        return $this->belongsTo(User::class);
    }
    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */


}
