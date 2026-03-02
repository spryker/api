<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Api\Business\Model\Processor\Pre\Action;

use Generated\Shared\Transfer\ApiRequestTransfer;
use Spryker\Zed\Api\ApiConfig;
use Spryker\Zed\Api\Business\Model\Processor\Pre\PreProcessorInterface;

class FindActionPreProcessor implements PreProcessorInterface
{
    public function process(ApiRequestTransfer $apiRequestTransfer): ApiRequestTransfer
    {
        $action = $apiRequestTransfer->getResourceAction();
        if ($action !== ApiConfig::ACTION_INDEX) {
            return $apiRequestTransfer;
        }

        $params = [$apiRequestTransfer];

        $apiRequestTransfer->setResourceParameters($params);

        return $apiRequestTransfer;
    }
}
