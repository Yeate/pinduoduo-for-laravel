<?php
/**
 * 获取订单详情
 */

namespace Xidiankeji\Pinduoduo\Request;


use Xidiankeji\Pinduoduo\AbstractInterface\Request;

class DdkOauthOrderDetailGetRequest extends Request
{
    private $type = 'pdd.ddk.oauth.order.detail.get';
    
    protected $orderSn;
    


    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'order_sn' => $this->orderSn,
            
        ];
        return array_filter($params);
    }
}