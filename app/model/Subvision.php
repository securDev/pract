<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Src\Auth\IdentityInterface;

class Subvision extends Model
{
   use HasFactory;

   public $timestamps = false;
   protected $fillable = [
       'name'
   ];

   // protected static function booted()
   // {
   //     static::created(function ($user) {
   //         $user->password = md5($user->password);
   //         $user->save();
   //     });
   // }

   //Выборка пользователя по первичному ключу
   public function findIdentity(int $id)
   {
       return self::where('id', $id)->first();
   }

   //Возврат первичного ключа
   public function getId(): int
   {
       return $this->id;
   }

}
