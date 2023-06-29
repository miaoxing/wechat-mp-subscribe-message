<?php

namespace Miaoxing\WechatMpSubscribeMessage\Migration;

use Wei\Migration\BaseMigration;

class V20220804141656CreateWechatMpSubscribeMessageTemplatesTable extends BaseMigration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->schema->table('wechat_mp_subscribe_message_templates')->tableComment('微信小程序订阅消息')
            ->bigId()
            ->string('name')->comment('名称')
            ->string('code')->comment('标识')
            ->string('template_id')->comment('模板编号')
            ->string('page')->comment('跳转页面')
            ->json('data')->comment('模板内容')
            ->timestamps()
            ->userstamps()
            ->softDeletable()
            ->exec();
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->schema->dropIfExists('wechat_mp_subscribe_message_templates');
    }
}
