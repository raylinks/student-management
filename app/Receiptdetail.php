<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receiptdetail extends Model
{

    protected $table ='receiptdetails';
    protected $fillable =['receipt_id', 'student_id', 'transact_id'];
}
