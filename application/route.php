<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]' => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['index/hello', ['method' => 'post']],
    ],
//    'blog/:year/:month' => ['blog/archive', ['method' => 'get'], ['year' => '\d{4}', 'month' => '\d{2}']],
//    'blog/:id'          => ['blog/get', ['method' => 'get'], ['id' => '\d+']],
//    'blog/:name'        => ['blog/read', ['method' => 'get'], ['name' => '\w+']],
    'hello/[:name]' => ['index/hello', ['method' => 'get', 'ext' => 'html']],
    'index/[:name]' => ['index/index', ['method' => 'get']],
    'hello5/[:name]' => ['index/hello5', ['method' => 'get']],
    'hello6/[:name]' => ['index/hello6', ['method' => 'get']],
    'hello7/[:name]' => ['index/hello7', ['method' => 'get']],
    'hello8/[:name]' => ['index/hello8', ['method' => 'get']],
    'hello9/[:name]' => ['index/hello9', ['method' => 'get']],
    'hello10/[:name]' => ['index/hello10', ['method' => 'get']],
    'maccms10/[:name]' => ['maccms10/vod', ['method' => 'get']],
    'create/[:name]' => ['user/create', ['method' => 'get']],
    'test1/[:name]' => ['user/test1', ['method' => 'get']],
    'test2/[:name]' => ['user/test2', ['method' => 'get']],
];
