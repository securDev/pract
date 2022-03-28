<?php

namespace Controller;

use Model\Post;
use Model\CountAbonent;
use Model\Abonent;
use Model\Room;
use Model\Subvision;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;

class Site
{
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
        // if ($request->method === Post::where('surname', $request->surname)->get()) 
        // {
        //   app()->route->redirect('/go');
        // }

        $abonents = Abonent::all();
        return (new View())->render('site.aboutAbonent', ['abonents' => $abonents, "message" => "Информация об абонентах"]);
    
    }


   public function addSubvision(Request $request): string
    {
        if ($request->method === 'POST' && Subvision::create($request->all())) {
          app()->route->redirect('/go');
      }

      return new View('site.addSubvision', ["message" => "Добавить подразделение"]);
    }


    public function addRoom(Request $request): string
    {
        if ($request->method === 'POST' && Room::create($request->all())) {
          app()->route->redirect('/go');
      }

      return new View('site.addRoom', ["message" => "Добавить комнату"]);
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
       //Если просто обращение к странице, то отобразить форму
       if ($request->method === 'GET') {
           return new View('site.login');
       }
       //Если удалось аутентифицировать пользователя, то редирект
       if (Auth::attempt($request->all())) {
           app()->route->redirect('/hello');
       }
       //Если аутентификация не удалась, то сообщение об ошибке
       return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
       Auth::logout();
       app()->route->redirect('/hello');
    }


}
