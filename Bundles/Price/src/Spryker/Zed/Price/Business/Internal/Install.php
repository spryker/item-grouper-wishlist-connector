<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Spryker\Zed\Price\Business\Internal;

use Spryker\Zed\Installer\Business\Model\AbstractInstaller;
use Spryker\Zed\Price\Business\Model\Writer;
use Spryker\Zed\Price\Business\Model\WriterInterface;
use Spryker\Zed\Price\PriceConfig;

class Install extends AbstractInstaller
{

    /**
     * @var Writer
     */
    protected $writer;

    /**
     * @var PriceConfig
     */
    protected $config;

    /**
     * @param WriterInterface $writer
     * @param PriceConfig $config
     */
    public function __construct(WriterInterface $writer, PriceConfig $config)
    {
        $this->writer = $writer;
        $this->config = $config;
    }

    /**
     * @return void
     */
    public function install()
    {
        $this->createPriceType();
    }

    /**
     * @return void
     */
    protected function createPriceType()
    {
        $this->writer->createPriceType($this->config->getPriceTypeDefaultName());
    }

}
