<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\User;
use Illuminate\Http\Request;

class frontcontroller extends Controller
{
public function home()
{

    return view('home',[

        $users = User::with('nidcard')->get(),
        'page_name'=> 'home page',
        'name'=> 'laravel 9 project',
        'users'=>$users
    ]);
}

public function about()
{
    return view('about',[
        'about_page'=>'about page',
        'project_name'=>'Laravel 9 Project'
    ]);
}

public function contact()
{
    $page_name = 'Contact page';
    $product_quantity = 82;
    $color = '';
    $product = [];
    $products = [
        1=> [
            'name'=>'Bag',
            'color'=>'red',
            'price'=>'1200',
        ],
        2=>[
            'name'=>'Sunglass',
            'color'=>'black',
            'price'=>'550',
        ],

    ];

        return view('contact', compact('page_name','product_quantity','color','product','products'));
}

public function service()
{
    $service = [
        'Web Development',
        'Web Design',
        'laravel Development',
        'PHP Development',
        'App Development',
        'Web Application Development',
        'Database Design And Development',
        'Graphics Design',
        'Logo Design',
        'Webpage Design',
        'UI_UX Design',
    ];
    return view('service', compact('service'));
}

public function uersIndex()
{
   $users = User::all();
   return view('home',[
    'users'=>$users
   ]);
}

public function books()
{
    $books = book::all();
    return $books;
}



};



