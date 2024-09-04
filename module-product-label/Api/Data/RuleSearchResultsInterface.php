<?php
/**
 * Copyright © Samuel Dhladhla (samueldhladhla22@gmail.com). All rights reserved.
 * Please contact the copyright owner for license details.
 */
declare(strict_types=1);

namespace SamuelDhladhla\ProductLabel\Api\Data;

/**
 * Interface RuleSearchResultsInterface
 */
interface RuleSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Rule list.
     * @return \SamuelDhladhla\ProductLabel\Api\Data\RuleInterface[]
     */
    public function getItems();

    /**
     * Set Rule list.
     * @param \SamuelDhladhla\ProductLabel\Api\Data\RuleInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
