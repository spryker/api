<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Api\Business\Model\Processor\Provider;

use Spryker\Zed\Api\Business\Model\Processor\Post\PostProcessorInterface;

interface PostProcessorProviderInterface
{
    public function buildAddActionPostProcessor(): PostProcessorInterface;

    public function buildRemoveActionPostProcessor(): PostProcessorInterface;
}
