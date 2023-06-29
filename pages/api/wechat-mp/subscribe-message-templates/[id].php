<?php

use Miaoxing\Plugin\BaseController;
use Miaoxing\WechatMpSubscribeMessage\Service\WechatMpSubscribeMessageTemplateModel;

return new class () extends BaseController {
    public function get($req)
    {
        $template = WechatMpSubscribeMessageTemplateModel::findByOrFail('code', $req['id']);

        return $template->toRet();
    }
};
