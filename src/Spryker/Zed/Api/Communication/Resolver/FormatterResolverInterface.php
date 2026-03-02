<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Api\Communication\Resolver;

use Spryker\Zed\Api\Communication\Formatter\FormatterInterface;

interface FormatterResolverInterface
{
    public function resolveFormatter(?string $formatType = null): FormatterInterface;
}
