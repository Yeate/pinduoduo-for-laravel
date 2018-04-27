<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/4/27
 * Time: 下午12:32
 */

namespace Xidian\Pinduoduo\Request;


use Xidian\Pinduoduo\AbstractInterface\Request;

class DdkOrderListRangeGetRequest extends Request
{
    private $type = 'pdd.ddk.order.list.range.get';

    private $startTime;

    private $endTime;

    private $pid;

    private $pageSize;

    private $page;

    private $timeType;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }
}