<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Api\Business\Model\Processor\Provider;

use Spryker\Zed\Api\ApiConfig;
use Spryker\Zed\Api\Business\Model\Processor\Pre\Action\AddActionPreProcessor;
use Spryker\Zed\Api\Business\Model\Processor\Pre\Action\FindActionPreProcessor;
use Spryker\Zed\Api\Business\Model\Processor\Pre\Action\GetActionPreProcessor;
use Spryker\Zed\Api\Business\Model\Processor\Pre\Action\UpdateActionPreProcessor;
use Spryker\Zed\Api\Business\Model\Processor\Pre\Filter\Header\PaginationByHeaderFilterPreProcessor;
use Spryker\Zed\Api\Business\Model\Processor\Pre\Filter\Query\CriteriaByQueryFilterPreProcessor;
use Spryker\Zed\Api\Business\Model\Processor\Pre\Filter\Query\FieldsByQueryPreProcessor;
use Spryker\Zed\Api\Business\Model\Processor\Pre\Filter\Query\PaginationByQueryFilterPreProcessor;
use Spryker\Zed\Api\Business\Model\Processor\Pre\Filter\Query\SortByQueryFilterPreProcessor;
use Spryker\Zed\Api\Business\Model\Processor\Pre\FilterPreProcessor;
use Spryker\Zed\Api\Business\Model\Processor\Pre\Format\FormatTypeByHeaderPreProcessor;
use Spryker\Zed\Api\Business\Model\Processor\Pre\Format\FormatTypeByPathPreProcessor;
use Spryker\Zed\Api\Business\Model\Processor\Pre\PathPreProcessor;
use Spryker\Zed\Api\Business\Model\Processor\Pre\PreProcessorInterface;
use Spryker\Zed\Api\Business\Model\Processor\Pre\RestApiResource\ResourceActionPreProcessor;
use Spryker\Zed\Api\Business\Model\Processor\Pre\RestApiResource\ResourceParametersPreProcessor;
use Spryker\Zed\Api\Business\Model\Processor\Pre\RestApiResource\ResourcePreProcessor;

class PreProcessorProvider implements PreProcessorProviderInterface
{
    /**
     * @var \Spryker\Zed\Api\ApiConfig
     */
    protected $apiConfig;

    public function __construct(ApiConfig $apiConfig)
    {
        $this->apiConfig = $apiConfig;
    }

    public function buildFilterPreProcessor(): PreProcessorInterface
    {
        return new FilterPreProcessor();
    }

    public function buildPathPreProcessor(): PreProcessorInterface
    {
        return new PathPreProcessor();
    }

    public function buildAddActionPreProcessor(): PreProcessorInterface
    {
        return new AddActionPreProcessor();
    }

    public function buildFindActionPreProcessor(): PreProcessorInterface
    {
        return new FindActionPreProcessor();
    }

    public function buildGetActionPreProcessor(): PreProcessorInterface
    {
        return new GetActionPreProcessor();
    }

    public function buildUpdateActionPreProcessor(): PreProcessorInterface
    {
        return new UpdateActionPreProcessor();
    }

    public function buildFieldsByQueryPreProcessor(): PreProcessorInterface
    {
        return new FieldsByQueryPreProcessor();
    }

    public function buildPaginationByHeaderFilterPreProcessor(): PreProcessorInterface
    {
        return new PaginationByHeaderFilterPreProcessor(
            $this->apiConfig,
        );
    }

    public function buildCriteriaByQueryFilterPreProcessor(): PreProcessorInterface
    {
        return new CriteriaByQueryFilterPreProcessor();
    }

    public function buildPaginationByQueryFilterPreProcessor(): PreProcessorInterface
    {
        return new PaginationByQueryFilterPreProcessor(
            $this->apiConfig,
        );
    }

    public function buildSortByQueryFilterPreProcessor(): PreProcessorInterface
    {
        return new SortByQueryFilterPreProcessor();
    }

    public function buildFormatTypeByHeaderPreProcessor(): PreProcessorInterface
    {
        return new FormatTypeByHeaderPreProcessor();
    }

    public function buildFormatTypeByPathPreProcessor(): PreProcessorInterface
    {
        return new FormatTypeByPathPreProcessor();
    }

    public function buildResourceActionPreProcessor(): PreProcessorInterface
    {
        return new ResourceActionPreProcessor();
    }

    public function buildResourceParamametersPreProcessor(): PreProcessorInterface
    {
        return new ResourceParametersPreProcessor();
    }

    public function buildResourcePreProcessor(): PreProcessorInterface
    {
        return new ResourcePreProcessor();
    }
}
