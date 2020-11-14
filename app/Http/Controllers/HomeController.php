<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    public function index(){
        // $query = DB::insert('INSERT into posts (title, text) VALUES(?,?) ', ['blog 4', 'Text from blog 4']);
        // var_dump($query);
        // DB::update('UPDATE posts SET title = ?, text = ? WHERE id = 9',['BLOG 2', 'Text from blog 2']);
       $posts = DB::select("SELECT * FROM posts WHERE  id > :id",['id'=> 8]);
       dump($posts);
        return view('home', ['res'=>5,'name'=>'jojo']);
    }

    public function test(){
        return __METHOD__;
    }

}
