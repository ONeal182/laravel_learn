<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Country;
use App\Models\City;
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
    // $data = DB::table('city')->select('city.ID', 'city.Name as city_name', 'country.Code','country.Name as country_name')->limit(10)->join('country','city.CountryCode','=','country.Code')->orderBy('city.ID')->get();






    // dd($data);
    // $post = new Post();
    // $post->title = 'Статья 2';
    // // $post->content = 'loream ipsum';
    // $post->save();

    // $data = Country::limit(10)->get();
    // $data = Country::where('Code', '<', 'ALB')->offset(2)->limit(2)->get();
    // $data = City::find(5);
    // $data = Country::find('AGO');
    
    
    
    // $post = new Post();
    // $post->title = 'post 4';
    // $post->content = 'loream ipsum 4...';
    // $post->save();

    // Post::create(['title'=>'post 6','content'=>'lorem ipsum 6']);
    // $post = Post::find(5);
    // $post->content = 'lorem ipsum 5';
    // $post->save();
    // Post::update(['title'=>'post 6','content'=>'lorem ipsum 6']);
    // Post::where('id', '>', '3')->update(['updated_at' => NOW()]);
    // Post::where('id', '=', '3')->delete();
    // Post::destroy(6);








    // dd($data);
        return view('home', ['res'=>5,'name'=>'jojo']);
    }

    public function test(){
        return __METHOD__;
    }

}
