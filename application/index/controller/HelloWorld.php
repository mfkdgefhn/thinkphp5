<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-01-03
 * Time: 12:34
 */
namespace app\index\controller;

class HelloWorld{
    public function index($name='world'){
        return 'hello,'.$name.'!';
    }
}