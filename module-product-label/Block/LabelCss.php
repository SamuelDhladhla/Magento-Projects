<?php
/**
 * Copyright © Samuel Dhladhla (samueldhladhla22@gmail.com). All rights reserved.
 * Please contact the copyright owner for license details.
 */
declare(strict_types=1);

namespace SamuelDhladhla\ProductLabel\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use SamuelDhladhla\ProductLabel\Model\Config;

class LabelCss extends Template
{
    /**
     * @var string
     */
    protected $_template = 'SamuelDhladhla_ProductLabel::label-css.phtml';

    /**
     * @var Config
     */
    protected $config;

    /**
     * @param Context $context
     * @param Config $config
     * @param array $data
     */
    public function __construct(
        Context $context,
        Config $config,
        array $data = []
    )
    {
        $this->config = $config;
        parent::__construct($context, $data);
    }

    /**
     * Get the Config model
     * 
     * @return Config
     */
    public function getConfig(): Config
    {
        return $this->config;
    }
}
