<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class TypeSubvision extends Model
{
	public static function getSubvision()
   {    
       $subvisions = self::all();
       return $subvisions;
   }
}