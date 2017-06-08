<?php

use App\Post;
use App\User;
use App\Role;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('read', function(){

    $posts = Post::all();

    // $posts = Post::where('is_admin',0)
    //             ->orderBy('id','desc')
    //             ->take(2)
    //             ->get();

    // $post = Post::find(2);

    return $posts;

    // $post = Post::where('is_admin',0)->first();

    // return $post->title;

    // foreach($posts as $post) {
    //     echo $post->id . ": " . $post->title . "<br>\n";
    // }

});



Route::get('insert/{title}/{fulltext}', function($title, $fulltext){

    $post = new Post;

    $post->title = "$title";
    $post->fulltext = "$fulltext";

    $post->save();

});

Route::get('create', function(){

    Post::create([
        'title'=>'我是鋼鐵人', 
        'fulltext'=>'我很強',
    ]);

});




Route::get('update/{id}/{title}/{fulltext}', function($id, $title, $fulltext){

    // $post = Post::find($id);
    // $post->title = "$title";
    // $post->fulltext = "$fulltext";
    // $post->save();

    Post::where('id', $id)->where('is_admin',0)
        ->update([
            'title'=>$title, 
            'fulltext'=>$fulltext
        ]);

});

Route::get('delete/{id}', function ($id) {

   $post = Post::find($id);
   $post->delete();

//    Post::destroy([1,3,5]);

});


Route::get('readall', function(){

    $posts = Post::withTrashed()->get();
    return $posts;

});

Route::get('onlytrash', function(){

    $posts = Post::onlyTrashed()->get();
    return $posts;

});

Route::get('restore', function(){
    Post::onlyTrashed()->restore();
});


Route::get('forcedelete', function(){

    Post::onlyTrashed()->forceDelete();

});


Route::get('forcedelete/{id}', function($id){

    // Post::find($id)->forceDelete();
    Post::where('id', $id)->forceDelete();

});

Route::get('user/{userid}/post', function($userid){
    return User::find($userid)->post->title;
});

Route::get('user/{userid}/posts', function($userid){
    
    $user = User::find($userid);

    foreach ($user->posts as $post) {
        echo $post->title . "<br>\n";
    }
});

Route::get('post/{postid}/user', function($postid){
    return Post::find($postid)->user->name;
});

Route::get('user/{userid}/role', function($userid){

    // $user = User::find($userid);
    // echo $user->name . " 您的權限為：<br>\n";
    // foreach($user->roles as $role) {
    //     echo $role->name . "<br>\n";
    // }
    //取用roles屬性

    $role = User::find($userid)->roles()->orderBy('id','desc')->get();
    return $role;
    //呼叫roles()方法
});


Route::get('role/{roleid}/user', function($roleid){

    $users = Role::find($roleid)
        ->users()
        ->orderBy('id','desc')
        ->get();
    
    return $users;

});