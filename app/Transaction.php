<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table ='transactions';
    protected $fillable =['transact_date','fee_id', 'user_id', 'student-id', 's_fee_id', 'paid', 'remark', 'description'];
    protected $primaryKey ='transact_id';
}
