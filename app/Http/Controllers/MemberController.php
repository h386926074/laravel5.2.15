<?php
/**
 * Created by PhpStorm.
 * User: huangfeng
 * Date: 2018/1/22
 * Time: 下午4:15
 */
namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function info($id){
//        return 'member-info-id-' . $id;
//        return route('memberinfo');

//        return view('member-info');
        return view('member/info',[
            'name' => 'huangfeng',
            'age' => 18
        ]);
    }
}
