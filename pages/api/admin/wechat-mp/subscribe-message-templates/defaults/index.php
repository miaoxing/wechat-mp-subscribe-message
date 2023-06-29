<?php

use Miaoxing\Plugin\BaseController;
use Miaoxing\Services\Page\DefaultsTrait;
use Miaoxing\WechatMpSubscribeMessage\Service\WechatMpSubscribeMessageTemplateModel;

return new class () extends BaseController {
    use DefaultsTrait;

    public function createModel(): WechatMpSubscribeMessageTemplateModel
    {
        return WechatMpSubscribeMessageTemplateModel::new();
    }
};
