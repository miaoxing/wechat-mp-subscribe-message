<?php

use Miaoxing\Plugin\BasePage;
use Miaoxing\WechatMpSubscribeMessage\Service\WechatMpSubscribeMessageTemplateModel;

return new class extends BasePage {
    public function get($req)
    {
        $template = WechatMpSubscribeMessageTemplateModel::findByOrFail('code', $req['id']);

        return $template->toRet();
    }
};
