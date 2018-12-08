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
        },$function_name));
        if(count($action)==1){
            switch ($action['0']) {
                case 'get':
                    if(isset($this->$param)){
                        return $this->$param;
                    }
                    break;
                case 'set':
                    if(isset($arguments['0'])){
                        if(is_string($arguments['0'])){
                            $arguments = str_replace("'",'"',$arguments['0']);
                        }elseif(is_bool($arguments['0'])){
                            if($arguments['0']){
                                $arguments='true';
                            }else{
                                $arguments='false';
                            }
                        }
                        try{
                            return $this->$param=$arguments;
                        }catch (\Exception $e){
                            throw new \Exception($param." param can't find");
                        }
                    }
                    break;
            }
        }
        throw new \Exception($function_name." can't find");
    }
}