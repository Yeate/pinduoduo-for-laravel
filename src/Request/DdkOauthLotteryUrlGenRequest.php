<?php
/**
 * 多多客：多多客工具生成转盘抽免单url
 */

namespace Xidiankeji\Pinduoduo\Request;


use Xidiankeji\Pinduoduo\AbstractInterface\Request;

class DdkOauthLotteryUrlGenRequest extends Request
{
    private $type = 'pdd.ddk.oauth.lottery.url.gen';
    
    protected $pid;
    
    protected $generateWeappWebview;
    
    protected $multiGroup;
    
    protected $customParameters;


    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'pid_list' => '["'.$this->pid.'"]',
            'generate_weapp_webview' => $this->generateWeappWebview,
            'multi_group'=>$this->multiGroup,
            'custom_parameters'=>$this->customParameters
            
        ];
        return array_filter($params);
    }
}