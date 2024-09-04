<?php
/**
 * Copyright © Samuel Dhladhla (samueldhladhla22@gmail.com). All rights reserved.
 * Please contact the copyright owner for license details.
 */
declare(strict_types=1);

namespace SamuelDhladhla\ProductLabel\Api;

interface LabelProcessorInterface
{
    /**
     * Process the labels for the given product IDs with the provided replacement map.
     *
     * @param array $replaceMap
     * @param array $productIds
     * @return array
     */
    public function execute(array $replaceMap, array $productIds): array;
}
