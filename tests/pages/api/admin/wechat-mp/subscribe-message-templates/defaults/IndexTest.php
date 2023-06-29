<?php

namespace MiaoxingTest\WechatMpSubscribeMessage\Pages\Api\Admin\WechatMp\SubscribeMessageTemplates\Defaults;

use Miaoxing\Plugin\Service\Tester;
use Miaoxing\Plugin\Test\BaseTestCase;
use Miaoxing\WechatMpSubscribeMessage\Service\WechatMpSubscribeMessageTemplateModel;

class IndexTest extends BaseTestCase
{
    public function testGet()
    {
        $ret = Tester::getAdminApi('wechat-mp/subscribe-message-templates/defaults');

        $this->assertRetSuc($ret);

        $data = $ret['data'];

        $this->assertArrayContains(WechatMpSubscribeMessageTemplateModel::toArray(), $data->toArray());
    }
}
