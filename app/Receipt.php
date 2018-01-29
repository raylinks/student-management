<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $table ='receipt';
    protected $fillable =['receipt_id'];

    static public function autoNumber()
    {
        $id= 0;
        $ReceiptID= Receipt::max('receipt_id');
        if($ReceiptID!=0)
        {
            $id =$ReceiptID+1;
            Receipt::insert(['receipt_id'=>$id]);
        }else{
            $id =1;
            Receipt::insert(['receipt_id'=>$id]);
        }
        return $id;
    }
}
