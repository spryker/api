<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Api\Communication\Plugin;

use Symfony\Component\HttpKernel\Event\ControllerEvent;

interface ApiControllerListenerInterface
{
    /**
     * @param \Symfony\Component\HttpKernel\Event\ControllerEvent $event
     *
     * @return callable|null
     */
    public function onKernelController(ControllerEvent $event);
}
