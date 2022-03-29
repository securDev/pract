<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class TypeRoom extends Model
{
	public static function getRoom()
   {    
       $rooms = self::all();
       return $rooms;
   }
}