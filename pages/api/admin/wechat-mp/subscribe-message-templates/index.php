<?php

use Miaoxing\Plugin\BaseController;
use Miaoxing\Services\Page\CollGetTrait;
use Miaoxing\Services\Page\PostToPatchTrait;
use Miaoxing\WechatMpSubscribeMessage\Service\WechatMpSubscribeMessageTemplateModel;

return new class () extends BaseController {
    use CollGetTrait;
    use PostToPatchTrait;

    protected $className = '小程序订阅消息模板';

    public function createModel(): WechatMpSubscribeMessageTemplateModel
    {
        return WechatMpSubscribeMessageTemplateModel::new();
    }
};
