<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $fillable = ['user_id', 'member_number', 'staff_number', 'name', 'status', 'account_number', 'last_transaction_date', 'amount'];
}
