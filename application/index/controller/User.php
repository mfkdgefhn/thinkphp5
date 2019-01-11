<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-01-08
 * Time: 16:30
 */

namespace app\index\controller;

use think\Controller;
use app\index\model\think_data\Users;
use app\index\model\think_data\Comment;
use think\Validate;

class User extends Controller
{
    public function read()
    {
        echo "wq vb ";
        $user = Users::get(1);
        dump($user->toArray());
    }

    public function test2()
    {
        $user = Users::get(2);
        print_r($user->nickname);
        echo "车品牌:" . $user->car->car_name . "<br/>车牌号:" . $user->car->car_code;
        echo "<br/>车主:" . $user->Id;
        echo "<br/>车主:" . $user->car->car_uid;
    }

    public function test1()
    {
        $user = Users::get(1);
        echo $user->nickname . "<br/>";
        echo $user->email . "<br/>";
        echo $user->birthday . "<br/>";
        echo "接下来是打印comm的结果" . "<br/>";
//        $user->comm;
        $comm = $user->comm()->where('content', 'like', '你是个好视频%')->find();
        if ($comm)
            echo "评论id：{$comm->Id} 用户评论内容：{$comm->content} 时间：{$comm->add_time} <br/>";
    }

    public function create()
    {
        return view();
    }

//    public function add()
//    {
//        $users = new Users;
//        if ($users->allowField(true)->validate(true)->save(input('post.'))) {
//            return '用户[' . $users->nickname . ':' . $users->Id . ':' . $users->email . ':' . $users->birthday . ']新增成功';
//        } else {
//            return $users->getError();
//        }
//    }
    public
    function add()
    {
        $data = input('post.');
        print_r($data);
        print_r("<br/>");
        $check = Validate::is($data['birthday'], 'date');
        if (false === $check) {
            return 'birthday日期格式非法';
        }
        $users = new Users;
        $users->allowField(true)->save($data);
        return '用户[' . $users->nickname . ':' . $users->Id . ':' . $users->email . ':' . $users->birthday . ']新增成功';
    }
}