<?php
/**
 * //多多客：生成多多进宝推广链接
 */

namespace Xidiankeji\Pinduoduo\Request;


use Xidiankeji\Pinduoduo\AbstractInterface\Request;

class DdkOauthRpPromUrlGenerateRequest extends Request
{
    private $type = 'pdd.ddk.oauth.rp.prom.url.generate';


    protected $pIdList;
    
    protected $customParameters;
    
    protected $generateShortUrl;
    
    protected $multiGroup;
    
    protected $generateWeApp='true';
    
    protected $generateWeappWebview='true';

    protected $weAppWebViewShortUrl='true';
    protected $weAppWebWiewUrl='true';
    
    
    
    
    
    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'p_id_list' => $this->pIdList,
            'custom_parameters' => $this->customParameters,
            'generate_short_url' => $this->generateShortUrl,
            'we_app_web_wiew_url' => $this->weAppWebWiewUrl,
            'we_app_web_view_short_url' => $this->weAppWebViewShortUrl,
            'generate_weapp_webview' => $this->generateWeappWebview,
            'generate_we_app'=>$this->generateWeApp
        ];

        return array_filter($params);
    }
}