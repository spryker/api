<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Api\Communication\Plugin;

use Generated\Shared\Transfer\ApiRequestTransfer;

interface ApiRequestTransferFilterPluginInterface
{
    public function filter(ApiRequestTransfer $apiRequestTransfer): ApiRequestTransfer;
}
