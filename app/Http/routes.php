<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('basic1',function(){
    return 'hello world';
});
Route::post('basic3',function(){
    return 'hello world';
});

Route::match(['get','post'],'basic2',function (){
    return 'match';
});

Route::any('multy2',function() {
   return 'multy2';
});

//路由参数

//Route::get('user/{id}',function ($id){
//    return 'User-id-' . $id;
//});

//Route::get('user/{name?}',function ($name = null){
//    return 'User-name-' . $name;
//});

//Route::get('user/{name?}',function ($name = 'sean'){
//    return 'User-name-' . $name;
//})->where('name','[A-Za-z]+');
//
//Route::get('user/{id}/{name?}',function ($id,$name = 'sean'){
//    return 'User-id-' . $id . '-name-' . $name;
//})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);


//路由别名
//Route::get('user/member-center',['as'=> 'center',function(){
//    return route('center');
//}]);

//路由群组
Route::group(['prefix' => 'member'],function (){

    Route::get('user/center',['as'=> 'center',function(){
        return route('center');
    }]);

    Route::any('multy2',function() {
        return 'multy2';
    });

});

//咱由中输出视图
Route::get('view',function (){
    return view('welcome');
});

//路由和控制器关联
//Route::get('member/info','MemberController@info');

//Route::get('member/info',['uses'=>'MemberController@info']);

//Route::get('member/info',[
//    'uses'=>'MemberController@info',
//    'as' => 'memberinfo'  //设置路由别名
//]);


Route::get('member/{id}','MemberController@info')->where('id','[0-9]+');





/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
