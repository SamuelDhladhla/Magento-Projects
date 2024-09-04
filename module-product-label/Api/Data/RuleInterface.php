<?php
/**
 * Copyright © Samuel Dhladhla (samueldhladhla22@gmail.com). All rights reserved.
 * Please contact the copyright owner for license details.
 */
declare(strict_types=1);

namespace SamuelDhladhla\ProductLabel\Api\Data;

/**
 * Interface RuleInterface
 * @package SamuelDhladhla\ProductLabel\Api\Data
 */
interface RuleInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{
    /**
     * Get label data
     * 
     * @return string|null
     */
    public function getLabelData();
}
