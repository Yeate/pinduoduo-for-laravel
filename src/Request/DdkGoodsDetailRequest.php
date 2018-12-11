<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/4/27
 * Time: 上午10:22
 */

namespace Xidiankeji\Pinduoduo\Request;


use Xidiankeji\Pinduoduo\AbstractInterface\Request;

class DdkGoodsDetailRequest extends Request
{
    private $type = 'pdd.ddk.goods.detail';

    protected $goodsIdList;

    

    /**
     * 设置商品ID
     * @Author: david
     * @Date: 2018/4/26
     * @param $goodsIdList
     *
     */
    public function setGoodsIdList($goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }


    public function getGoodsIdList()
    {
        return $this->goodsIdList;
    }

    /**
     * 获取参数
     * @Author: david
     * @Date: 2018/4/26
     * @return array
     */
    public function getParams()
    {
        return [
            'type' => $this->type,
            'goods_id_list' => $this->goodsIdList
        ];
    }
}