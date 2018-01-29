<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cla extends Model
{
    protected $table = 'clas';
    protected $fillable = ['academic_id','level_id','batch_id', 'group_id', 'time_id','start_date', 'end_date', 'shift_id'];
    protected $primaryKey ='cla_id';
}
