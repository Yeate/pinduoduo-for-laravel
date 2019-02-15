<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/4/27
 * Time: 下午4:16
 */

namespace Xidiankeji\Pinduoduo\Request;


use Xidiankeji\Pinduoduo\AbstractInterface\Request;

class DdkOauthLotteryNewListRequest extends Request
{
    private $type = 'pdd.ddk.oauth.lottery.new.list.get';

    protected $startTime;
    
    protected $endTime;
    
    protected $pageSize;
    
    protected $page;
    

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'start_update_time' => $this->startTime,
            'end_update_time' => $this->endTime,
            'page_size' => $this->pageSize,
            'page' => $this->page
        ];
        return array_filter($params);
    }
}