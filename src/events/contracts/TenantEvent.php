<?php

declare(strict_types=1);

/*
 * ThinkPHP多租户扩展.
 *
 * @author Abbotton <uctoo@foxmail.com>
 */

namespace think\tenancy\events\contracts;

use think\tenancy\model\Tenants;

abstract class TenantEvent
{
    /** @var Tenants */
    public $tenant;

    public function __construct(Tenants $tenant)
    {
        $this->tenant = $tenant;
    }
}
