<?php

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

Route::get('insert', function(){

    DB::insert('INSERT INTO posts(title, `fulltext`) VALUES (?,?)', ['蘋果新聞','天國近了']);

});


Route::get('read', function(){

    $results = DB::select('SELECT * FROM posts WHERE id = ?', [2]);
    // return $results;
    // foreach ($results as $result) {
    //     echo $result->title . "<br>\n";
    //     echo $result->fulltext . "<br>\n";
    // }
    var_dump($results);

});


Route::get('update', function(){

    $sql = DB::update('UPDATE posts SET title = "天氣很好" WHERE id = ?', [1]);
    var_dump($sql);

});


Route::get('delete', function(){

    $num = 2;
    DB::delete('DELETE FROM posts WHERE id = ?', [$num]);

});