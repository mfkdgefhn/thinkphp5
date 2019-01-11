<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-01-07
 * Time: 16:45
 */

namespace app\index\model\maccms10;

use think\Model;

class type extends Model
{
    // 设置完整的数据表（包含前缀）
    //protected $table = 'mac_vod';
    // 设置单独的数据库连接
    // 设置数据表（不含前缀）
    //protected $name = 'member';
    protected
        $connection = [
        // 数据库类型
        'type' => 'mysql',
        // 服务器地址
        'hostname' => '150.109.106.30',
        // 数据库名
        'database' => 'maccms10',
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

    protected function scopeTypeEn($query, $a)
    {
        $query->where('type_en', $a);
    }
}