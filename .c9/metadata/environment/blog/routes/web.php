{"changed":true,"filter":false,"title":"web.php","tooltip":"/blog/routes/web.php","value":"<?php\n\n/*\n|--------------------------------------------------------------------------\n| Web Routes\n|--------------------------------------------------------------------------\n|\n| Here is where you can register web routes for your application. These\n| routes are loaded by the RouteServiceProvider within a group which\n| contains the \"web\" middleware group. Now create something great!\n|\n*/\n\nRoute::get('/posts', 'PostController@index');\n","undoManager":{"mark":-2,"position":1,"stack":[[{"start":{"row":13,"column":0},"end":{"row":15,"column":3},"action":"remove","lines":["Route::get('/', function () {","    return view('welcome');","});"],"id":2}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":45},"action":"insert","lines":["Route::get('/posts', 'PostController@index');"],"id":3}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":45},"end":{"row":13,"column":45},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1619403080563}