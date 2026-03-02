<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerTest\Zed\Api\Business\Model\Processor\Pre\RestApiResource;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\ApiRequestTransfer;
use Spryker\Zed\Api\Business\Model\Processor\Pre\RestApiResource\ResourceParametersPreProcessor;

/**
 * Auto-generated group annotations
 *
 * @group SprykerTest
 * @group Zed
 * @group Api
 * @group Business
 * @group Model
 * @group Processor
 * @group Pre
 * @group RestApiResource
 * @group ResourceParametersPreProcessorTest
 * Add your own group annotations below this line
 */
class ResourceParametersPreProcessorTest extends Unit
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testProcessNoParameters(): void
    {
        $processor = new ResourceParametersPreProcessor();

        $apiRequestTransfer = new ApiRequestTransfer();
        $apiRequestTransfer->setPath('');

        $apiRequestTransferAfter = $processor->process($apiRequestTransfer);
        $this->assertSame([], $apiRequestTransferAfter->getResourceParameters());
    }

    public function testProcessWithParameters(): void
    {
        $processor = new ResourceParametersPreProcessor();

        $apiRequestTransfer = new ApiRequestTransfer();
        $apiRequestTransfer->setPath('foo/bar');

        $apiRequestTransferAfter = $processor->process($apiRequestTransfer);
        $this->assertSame(['foo', 'bar'], $apiRequestTransferAfter->getResourceParameters());
    }
}
