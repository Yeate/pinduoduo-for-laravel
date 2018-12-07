<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/4/27
 * Time: 下午4:28
 */

namespace Xidiankeji\Pinduoduo\Request;


use Xidiankeji\Pinduoduo\AbstractInterface\Request;

class DdkOauthCmsPromUrlGenerateRequest extends Request
{
    private $type = 'pdd.ddk.oauth.cms.prom.url.generate';

    protected $multiGroup = false;          //单人团多人团标志。true-多人团，false-单人团 默认false
    
    protected $generateShortUrl = false;    //是否生成短链接。true-是，false-否，默认false
    
    protected $generateMobile = false;      //是否生成手机跳转链接。true-是，false-否，默认false
    
    protected $pIdList;             //推广位列表，例如：["60005_612"]
    
    protected $customParameters;    //自定义参数，为链接打上自定义标签。自定义参数最长限制64个字节
    
    protected $generateWeappWebview = false;//是否唤起微信客户端， 默认false 否，true 是
    
    protected $weAppWebViewShortUrl;//唤起微信app推广短链接
    
    protected $weAppWebWiewUrl;     //唤起微信app推广链接
    
    protected $channelType;         //0, "1.9包邮"；1, "今日爆款"； 2, "品牌清仓"； 4,"PC端专属商城"；5，“赚多多币兑现金”；不传值为默认商城
    
    public function getParams()
    {
        $params = [
            'generate_short_url' => $this->generateShortUrl,
            'p_id_list' => $this->pIdList,
            'generate_mobile' => $this->generateMobile,
            'multi_group' => $this->multiGroup,
            'custom_parameters' => $this->customParameters,
            'generate_weapp_webview' => $this->generateWeappWebview,
            'we_app_web_view_short_url' => $this->weAppWebViewShortUrl,
            'we_app_web_wiew_url' => $this->weAppWebWiewUrl,
            'channel_type' => $this->channelType,
        ];
        return array_filter($params);
    }
}