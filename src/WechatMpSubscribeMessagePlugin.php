<?php

namespace Miaoxing\WechatMpSubscribeMessage;

use Miaoxing\Admin\Service\AdminMenu;
use Miaoxing\Plugin\BasePlugin;

class WechatMpSubscribeMessagePlugin extends BasePlugin
{
    protected $name = '微信小程序订阅消息';

    public function onAdminMenuGetMenus(AdminMenu $menu)
    {
        $templates = $menu->child('setting')
            ->addChild()
            ->setLabel('订阅消息模板管理')
            ->setUrl('admin/wechat-mp/subscribe-message-templates');
        $templates->addChild()->setUrl('admin/wechat-mp/subscribe-message-templates/new')->setLabel('添加');
        $templates->addChild()->setUrl('admin/wechat-mp/subscribe-message-templates/[id]/edit')->setLabel('编辑');
    }
}
