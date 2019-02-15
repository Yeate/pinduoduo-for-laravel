<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/4/27
 * Time: 下午4:16
 */

namespace Xidiankeji\Pinduoduo\Request;


use Xidiankeji\Pinduoduo\AbstractInterface\Request;

class DdkAllOrderListIncrementGetRequest extends Request
{
    private $type = 'pdd.ddk.all.order.list.increment.get';

    protected $startUpdateTime;
    
    protected $endUpdateTime;
    
    protected $pageSize;
    
    protected $page;
    

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'start_update_time' => $this->startUpdateTime,
            'end_update_time' => $this->endUpdateTime,
            'page_size' => $this->pageSize,
            'page' => $this->page
        ];
        return array_filter($params);
    }
}