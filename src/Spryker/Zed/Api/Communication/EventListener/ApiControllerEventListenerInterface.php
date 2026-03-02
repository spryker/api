<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Api\Communication\EventListener;

use Symfony\Component\HttpKernel\Event\ControllerEvent;

interface ApiControllerEventListenerInterface
{
    public function onKernelControllerEvent(ControllerEvent $controllerEvent): void;
}
