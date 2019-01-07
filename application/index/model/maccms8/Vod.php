<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-01-07
 * Time: 16:43
 */

namespace app\index\model;

use think\Model;

class Vod extends Model
{
// 设置单独的数据库连接
    protected $connection = [
// 数据库类型
        'type' => 'mysql',
// 服务器地址
        'hostname' => '150.109.106.30',
// 数据库名
        'database' => 'maccms8',
// 数据库用户名
        'username' => 'anan',
// 数据库密码
        'password' => 'mfkdgefhn123',
// 数据库连接端口
        'hostport' => '',
// 数据库连接参数
        'params' => [],
// 数据库编码默认采用utf8
        'charset' => 'utf8',
// 数据库表前缀
        'prefix' => 'mac_',
// 数据库调试模式
        'debug' => true,
    ];
}
