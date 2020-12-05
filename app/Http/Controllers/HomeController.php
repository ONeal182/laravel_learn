<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    public function index(){
        // $query = DB::insert('INSERT into posts (title, text) VALUES(?,?) ', ['blog 4', 'Text from blog 4']);
        // var_dump($query);
        // DB::update('UPDATE posts SET title = ?, text = ? WHERE id = 9',['BLOG 2', 'Text from blog 2']);
    //    $posts = DB::select("SELECT * FROM posts WHERE  id > :id",['id'=> 8]);
    //    dump($posts);
    // $data = DB::table('city')->select('ID', 'Name')->where([
    //     ['ID', '<', 3],
    //     ['ID', '!=', 1]
    // ])->get();
    // $data = DB::table('country')->limit(10)->pluck('Name','Code');
    // $data = DB::table('country')->count();
    // $data = DB::table('country')->max('Population');
    // $data = DB::table('country')->min('Population');
    // $data = DB::table('country')->sum('Population');
    // $data = DB::table('country')->avg('Population');
    // $data = DB::table('city')->select('CountryCode')->distinct()->get();
    $data = DB::table('city')->select('city.ID', 'city.Name as city_name', 'country.Code','country.Name as country_name')->limit(10)->join('country','city.CountryCode','=','country.Code')->orderBy('city.ID')->get();






    dd($data);
        return view('home', ['res'=>5,'name'=>'jojo']);
    }

    public function test(){
        return __METHOD__;
    }

}
