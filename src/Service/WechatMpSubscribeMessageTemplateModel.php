<?php

namespace Miaoxing\WechatMpSubscribeMessage\Service;

use Miaoxing\Plugin\BaseModel;
use Miaoxing\Plugin\Model\ModelTrait;
use Miaoxing\Plugin\Model\ReqQueryTrait;
use Miaoxing\Plugin\Model\SnowflakeTrait;
use Miaoxing\WechatMpSubscribeMessage\Metadata\WechatMpSubscribeMessageTemplateTrait;
use Wei\Model\SoftDeleteTrait;

class WechatMpSubscribeMessageTemplateModel extends BaseModel
{
    use ModelTrait;
    use ReqQueryTrait;
    use SnowflakeTrait;
    use SoftDeleteTrait;
    use WechatMpSubscribeMessageTemplateTrait;
}
