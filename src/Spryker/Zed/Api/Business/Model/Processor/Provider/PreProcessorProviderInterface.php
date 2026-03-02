<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Api\Business\Model\Processor\Provider;

use Spryker\Zed\Api\Business\Model\Processor\Pre\PreProcessorInterface;

interface PreProcessorProviderInterface
{
    public function buildFilterPreProcessor(): PreProcessorInterface;

    public function buildPathPreProcessor(): PreProcessorInterface;

    public function buildAddActionPreProcessor(): PreProcessorInterface;

    public function buildFindActionPreProcessor(): PreProcessorInterface;

    public function buildGetActionPreProcessor(): PreProcessorInterface;

    public function buildUpdateActionPreProcessor(): PreProcessorInterface;

    public function buildFieldsByQueryPreProcessor(): PreProcessorInterface;

    public function buildPaginationByHeaderFilterPreProcessor(): PreProcessorInterface;

    public function buildCriteriaByQueryFilterPreProcessor(): PreProcessorInterface;

    public function buildPaginationByQueryFilterPreProcessor(): PreProcessorInterface;

    public function buildSortByQueryFilterPreProcessor(): PreProcessorInterface;

    public function buildFormatTypeByHeaderPreProcessor(): PreProcessorInterface;

    public function buildFormatTypeByPathPreProcessor(): PreProcessorInterface;

    public function buildResourceActionPreProcessor(): PreProcessorInterface;

    public function buildResourceParamametersPreProcessor(): PreProcessorInterface;

    public function buildResourcePreProcessor(): PreProcessorInterface;
}
