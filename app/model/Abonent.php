<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Src\Auth\IdentityInterface;

class Abonent extends Model
{
   use HasFactory;

   public $timestamps = false;
   protected $fillable = [
       'search'
   ];

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

   // //Возврат аутентифицированного пользователя
   // public function attemptIdentity(array $credentials)
   // {
   //     return self::where(['login' => $credentials['login'],
   //         'password' => md5($credentials['password'])])->first();
   // }
}
