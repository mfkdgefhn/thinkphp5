<?php

namespace app\index\controller;

use think\Controller;
use think\Db;
use app\index\model\think_data\Data;

//use app\index\model\maccms10\Type;

class Index extends Controller
{
    public function index()
    {
//        $user = Data::get(1);
//        echo $user->data . '<br/>';
//        $user->data = '你是谁';
//        echo $user->data . '<br/>';
//        echo $user;
//        $list = Data::scope('email', '你好');
//        print_r($list);
//        $list = Type::scope('type_en', 'dianying')->all();
//        print_r($list);

//        print_r(Type::find());
    }

    public function hello5()
    {
        $query = new \think\db\Query;
        $query->name('data')->where('data', 'like', '%think%')->where('id', '>=', '1')->limit(10);
        $result = Db::select($query);
        print_r($result);

    }

    public function hello6()
    {
//        $result = Db::connect('db1')->query('select * from think_data');
//        dump($result);

        $result = Db::connect('db2')->query('select * from mac_user where u_id=1');
        print_r($result);

//        $result = Db::connect('db1')->query('select * from help_category');
//        dump($result);

    }

    public function hello7()
    {
//        Db::execute('insert into think_data (id,data) values (11,"你好")');
//        $result = Db::execute('delete from think_data where id between :id1 and :id2', ['id1' => 5, 'id2' => 11]);
        $result = Db::name('data')->insert(['id' => 3]);
        dump($result);
//        $result = Db::table(think_data)->insert(['id' => 6, 'name' => 'nihao']);
//        dump($result);
    }

    public function hello8()
    {
        $result = Db::execute('insert into think_data (id,data) values(1,"堆场使用者工")');
//        $result = Db::name('data')->where('id', ['in', [1, 2, 3]], [' >= ', 1], ' or ')->where('data', 'like', ' % php % ')->select();
        dump($result);
    }

    public function hello9()
    {
//        Db::table('think_data')->insert(['id' => 4, 'data' => "你好11"]);
        Db::transaction(function () {
            Db::table('think_data')->delete(5);
            Db::table('think_data')->insert(['id' => 7, 'data' => "你好"]);
        });
    }

    public function hello10()
    {
//        $name = Db::name('data')->where('data', 'like', '%你好%')->column('*');
//        print_r($name);
        $result = Db::name('data')->where("id=1")->select();
        print_r($result);
    }

}