<?php

namespace Controller;

use Model\Post;
use Model\CountAbonent;
use Model\Abonent;
use Model\Room;
use Model\Subvision;
use Model\TypeSubvision;
use Model\TypeRoom;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;

use Src\Validator\Validator;

class Site
{


    private $error = '';
   public function index(Request $request): string
   {
      $posts = Post::where('id', $request->id)->get();
      return (new View())->render('site.post', ['posts' => $posts]);
   }

   public function hello(): string
   {
       return new View('site.hello', ['message' => 'Выберите действие']);
   }

    

    public function countAbonent(Request $request): string
    {   
        if ($request->method === 'POST')
        {
            $count = count(Abonent::where('room', $request->room)->where('subvision', $request->subvision)->get());
            return (new View)->render('site.countAbonent', ['message' => "Подсчитать количество абонентов", 'count' => $count]);
        }
        return (new View)->render('site.countAbonent', ['message' => "Подсчитать количество абонентов"]);
    }


    





    public function aboutAbonent(Request $request): string
    {
        if ($request->method === 'POST')
        {
            $abonents = Abonent::where('surname', $request->search)->get();
            return (new View())->render('site.aboutAbonent', ['message' => "Информация об абонентах", 'abonents' => $abonents]);

        }

        $abonents = Abonent::all();
        return (new View())->render('site.aboutAbonent', ['abonents' => $abonents, "message" => "Информация об абонентах"]);
    
    }












   public function addSubvision(Request $request): string
    {
        if ($request->method === 'POST') 
        {   
          $validator = new Validator($request->all(), 
            [
               'name' => ['required']
            ], 
            [
               'required' => 'Поле :field пусто'
            ]);

           if($validator->fails()){
               return new View('site.addSubvision',
                   ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
           }

           if (Subvision::create($request->all())) 
           {
           app()->route->redirect('/hello');
           }


        }


        $subvisions = TypeSubvision::getSubvision();

      return (new View)->render('site.addSubvision', ["message" => "Добавить подразделение", 'subvisions' => $subvisions]);

    }












    public function addRoom(Request $request): string
    {
        if ($request->method === 'POST') 
        {   
          $validator = new Validator($request->all(), [
               'name' => ['required']
           ], [
               'required' => 'Поле :field пусто'
           ]);

           if($validator->fails()){
               return new View('site.addRoom',
                   ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
           }

           if (Room::create($request->all())) 
           {
           app()->route->redirect('/hello');
           }

          app()->route->redirect('/hello');
        }
        $subvisions = TypeSubvision::getSubvision();
        $rooms = TypeRoom::getRoom();
      return (new View)->render('site.addRoom', ["message" => "Добавить комнату", 'rooms' => $rooms,'subvisions' => $subvisions]);
    }


   public function signup(Request $request): string
   {
      if ($request->method === 'POST' && User::create($request->all())) {
          app()->route->redirect('/go');
      }

      return new View('site.signup');
   }

    public function login(Request $request): string
    {
       if ($request->method === 'POST') {

           $validator = new Validator($request->all(), [
               'login' => ['required', 'unique:login'],
               'password' => ['required']
           ], [
               'required' => 'Поле :field пусто',
               'unique' => 'Поле :field должно быть уникально'
           ]);

           if($validator->fails()){
               return new View('site.login',
                   ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
           }

           if (Auth::attempt($request->all())) 
           {
           app()->route->redirect('/hello');
           }
           else{
            $this->error = "Пароль или логин не верен";
           }
       }
       return new View('site.login', ['error' => $this->error]);
    }

    public function logout(): void
    {
       Auth::logout();
       app()->route->redirect('/hello');
    }


}
