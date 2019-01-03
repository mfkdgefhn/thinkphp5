<?php

namespace app\index\controller;



class Index{
    public function index(){
        return 'index';
    }
    public function hello($name='world',$city=''){
        return 'hello,'.$name.'! You come from '.$city.'.';
    }
}