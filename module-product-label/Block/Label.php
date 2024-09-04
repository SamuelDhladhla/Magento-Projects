<?php
/**
 * Copyright © Samuel Dhladhla (samueldhladhla22@gmail.com). All rights reserved.
 * Please contact the copyright owner for license details.
 */
declare(strict_types=1);

namespace SamuelDhladhla\ProductLabel\Block;

use Magento\Framework\View\Element\Template;

class Label extends Template
{
    /**
     * @var string
     */
    protected $_template = 'SamuelDhladhla_ProductLabel::label-container.phtml';

    /**
     * Get label data for rendering.
     *
     * @return string
     */
    public function getLabelData()
    {
        // Placeholder for actual label data logic
        return 'This is sample label data.';
    }
}
