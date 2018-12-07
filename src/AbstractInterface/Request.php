<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/4/26
 * Time: 下午3:40
 */

namespace Xidiankeji\Pinduoduo\AbstractInterface;


class Request
{
    private $type;

    private $client_id;

    private $access_token;

//    private $timestamp;

    private $data_type;

    private $version;

    private $sign;
    
    function __call(string $function_name, $arguments=[])
    {
        $action = '';
        $param = lcfirst(preg_replace_callback('/get|set/',function($match)use(&$action){
            $action = $match;
        },'getCustomParameters'));
        if(count($action)==1){
            switch ($action) {
                case 'get':
                    if(isset($this->$param)){
                        return $this->$param;
                    }
                    break;
                case 'set':
                    if(isset($this->$param) && isset($arguments['0'])){
                        $this->$param=$arguments['0'];
                    }
                    break;
            }
        }
        throw new \Exception($function_name." can't find");
    }
}