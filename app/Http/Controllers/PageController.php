<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Главная страница
    public function index()
    {
        return view('welcome');
    }

    // Все капсулы
    public function capsules()
    {
        return view('capsules-page');
    }

    // Автоответы
    public function autoResponse()
    {
        return view('auto-response');
    }

    // Капсула в разработке
    public function capsuleInDevelopment()
    {
        return view('capsule-in-development');
    }

    // Лендинг капсулы
    public function landing()
    {
        return view('landing');
    }

    // Партнеры
    public function partners()
    {
        return view('partners');
    }

    // Консультация
    public function consultation()
    {
        return view('consultation');
    }

    // Логин
    public function login()
    {
        return view('login');
    }

    public function termsandconditions()
    {
        return view('terms-and-conditions');
    }
    //Политика конфиденциальности
    public function privacypolicy()
    {
        return view('privacy-policy');
    }
}
