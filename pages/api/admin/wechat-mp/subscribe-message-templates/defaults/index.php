<?php

use Miaoxing\Plugin\BasePage;
use Miaoxing\Services\Page\DefaultsTrait;
use Miaoxing\WechatMpSubscribeMessage\Service\WechatMpSubscribeMessageTemplateModel;

return new class () extends BasePage {
    use DefaultsTrait;

    public function createModel(): WechatMpSubscribeMessageTemplateModel
    {
        return WechatMpSubscribeMessageTemplateModel::new();
    }
};
