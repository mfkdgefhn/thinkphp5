<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-01-08
 * Time: 17:13
 */

namespace app\index\model\think_data;

use think\Model;

class Users extends Model
{
    public function comm()
    {
        return $this->hasMany('Comment', 'uid', 'Id');
    }

    public function car()
    {
        return $this->hasOne('Car', 'car_uid', 'Id');
    }
}