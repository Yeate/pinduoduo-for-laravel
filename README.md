## pinduoduo-sdk-for-laravel
拼多多api-sdk laravel 版本
## Installation

```shell
$ composer require "composer require xidian/pinduoduo-sdk"
```
然后添加服务： 修改 `config/app.php` 添加  `Xidian\Pinduoduo\PinduoduoServiceProvider::class`
别名的配置： `'Pinduoduo' => Xidian\Pinduoduo\Facades\Pinduoduo::class`

执行
```shell
$ php artisan vendor:publish
```
选择Provider: `Xidian\Pinduoduo\PinduoduoServiceProvider`选项  
config目录下会生成 `pinduouo.php` 文件 修改配置文件即可

## USE

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pinduoduo;
use Xidian\Pinduoduo\Request\DdkGoodsDetailRequest;

class IndexController extends Controller
{
    public function index()
    {
        $request = new DdkGoodsDetailRequest();
        $request->setGoodsIdList('[1016692240]');
        $result = Pinduoduo::excute($request);
        dd($result);
    }
}

```