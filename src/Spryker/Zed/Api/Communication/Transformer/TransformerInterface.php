<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Api\Communication\Transformer;

use Generated\Shared\Transfer\ApiRequestTransfer;
use Generated\Shared\Transfer\ApiResponseTransfer;
use Symfony\Component\HttpFoundation\Response;

interface TransformerInterface
{
    public function transform(ApiRequestTransfer $apiRequestTransfer, ApiResponseTransfer $apiResponseTransfer, Response $response): Response;

    public function transformBadRequest(ApiResponseTransfer $apiResponseTransfer, Response $response, string $message): Response;
}
