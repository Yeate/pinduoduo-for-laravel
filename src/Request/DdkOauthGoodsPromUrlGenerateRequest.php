<?php
/**
 * //多多客：生成多多进宝推广链接
 */

namespace Xidiankeji\Pinduoduo\Request;


use Xidiankeji\Pinduoduo\AbstractInterface\Request;

class DdkOauthGoodsPromUrlGenerateRequest extends Request
{
    private $type = 'pdd.ddk.oauth.goods.prom.url.generate';


    protected $pid;
    
    protected $goodsIdList;
    
    protected $generateShortUrl;
    
    protected $multiGroup;
    
    protected $generateWeApp='true';
    

    

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'p_id' => $this->pid,
            'goods_id_list' => $this->goodsIdList,
            'generate_short_url' => $this->generateShortUrl,
            'multi_group' => $this->multiGroup,
            'generate_we_app'=>$this->generateWeApp
        ];

        return array_filter($params);
    }
}