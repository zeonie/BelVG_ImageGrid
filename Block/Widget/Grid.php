<?php

namespace BelVG\ImageGrid\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface; 
 
class Grid extends Template implements BlockInterface
{
    /**
     * @var string
     */
    protected $_template = "widget/grid.phtml";
}