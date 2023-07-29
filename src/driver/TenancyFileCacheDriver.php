<?php

declare(strict_types=1);

/*
 * ThinkPHP多租户扩展.
 *
 * @author Abbotton <uctoo@foxmail.com>
 */

namespace think\tenancy\driver;

use think\App;
use think\cache\driver\File;
use think\contract\CacheHandlerInterface;

class TenancyFileCacheDriver extends File implements CacheHandlerInterface
{
    public function __construct(App $app)
    {
        $options = config('tenancy.reset_cache') == true && app(\think\tenancy\Tenancy::class)->find()
            ? config('tenancy.overwrite_cache_config.file')
            : [];

        parent::__construct($app, $options);
    }
}
