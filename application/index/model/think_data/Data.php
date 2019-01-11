<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-01-07
 * Time: 12:29
 */

namespace app\index\model;

use think\Model;

class Data extends Model
{
    public function setEmail1Attr($value, $user)
    {

    }

    protected function scopeEmail($query, $aa)
    {
        $query->where('data', $aa);
    }

}