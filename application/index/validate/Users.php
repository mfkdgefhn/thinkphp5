<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-01-09
 * Time: 10:01
 */

namespace app\index\validate;

use think\Validate;

class Users extends Validate
{
    protected $rule = [
        ['nickname', 'require|min:5', '昵称不可为空|昵称不可少于5个字符'],
        ['email', 'require|email', '邮箱不可为空|邮箱格式不对'],
        ['birthday', 'require|dateFormat:Y-m-d', '日期不可为空|日期格式不对'],
    ];

    protected function checkMail($value, $rule)
    {
        return $value === $rule;
    }
}