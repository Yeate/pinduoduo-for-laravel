## pinduoduo-sdk-for-laravel
拼多多api-sdk laravel 版本
## Installation

```shell
$ composer require "composer require xidiankeji/pinduoduo-sdk"
```
然后添加服务： 修改 `config/app.php` 添加`Xidiankeji\Pinduoduo\PinduoduoServiceProvider::class`  
别名的配置： `'Pinduoduo' => Xidiankeji\Pinduoduo\Facades\Pinduoduo::class`

执行
```shell
$ php artisan vendor:publish
```
选择Provider: `Xidiankeji\Pinduoduo\PinduoduoServiceProvider`选项  
config目录下会生成 `pinduouo.php` 文件 修改配置文件即可

## USE

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pinduoduo;
use Xidiankeji\Pinduoduo\Request\DdkGoodsDetailRequest;

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