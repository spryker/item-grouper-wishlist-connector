<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Spryker\Zed\OmsDiscountConnector;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;
use Spryker\Zed\OmsDiscountConnector\Dependency\Facade\OmsDiscountConnectorToDiscountBridge;

class OmsDiscountConnectorDependencyProvider extends AbstractBundleDependencyProvider
{

    const FACADE_DISCOUNT = 'facade discount';

    /**
     * @param Container $container
     *
     * @return Container
     */
    public function provideCommunicationLayerDependencies(Container $container)
    {
        $container[self::FACADE_DISCOUNT] = function (Container $container) {
            return new OmsDiscountConnectorToDiscountBridge($container->getLocator()->discount()->facade());
        };

        return $container;
    }

}
