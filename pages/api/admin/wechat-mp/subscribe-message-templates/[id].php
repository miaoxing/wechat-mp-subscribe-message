<?php

use Miaoxing\Plugin\BasePage;
use Miaoxing\Services\Page\ItemTrait;
use Miaoxing\Services\Service\UpdateAction;
use Miaoxing\WechatMpSubscribeMessage\Service\WechatMpSubscribeMessageTemplateModel;
use Wei\V;

return new class () extends BasePage {
    use ItemTrait;

    protected $className = '小程序订阅消息模板';

    public function createModel(): WechatMpSubscribeMessageTemplateModel
    {
        return WechatMpSubscribeMessageTemplateModel::new();
    }

    public function patch()
    {
        return UpdateAction::new()
            ->validate(function (WechatMpSubscribeMessageTemplateModel $template, $req) {
                $v = V::defaultOptional()->defaultNotEmpty();
                $v->setModel($template);
                $v->modelColumn('name', '名称')->requiredIfNew();
                $v->modelColumn('code', '标识')->requiredIfNew()->notModelDup();
                $v->modelColumn('templateId', '模板编号')->requiredIfNew();
                return $v->check($req);
            })
            ->exec($this);
    }
};
