<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   public function orderRelationcustomer()
   {
   return $this->hasOne('App\Customer', 'id', 'customer_id');
   }
  
}
